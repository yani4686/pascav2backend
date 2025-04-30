<?php

use CodeIgniter\HTTP\CURLRequest;

function translateIfNeeded($text)
{
    if (empty($text)) return ['', '', false];

    $encoding = mb_detect_encoding($text, ['UTF-8', 'ISO-8859-1', 'ASCII', 'ISO-8859-6', 'Windows-1252'], true) ?: 'UTF-8';
    $text = mb_convert_encoding($text, 'UTF-8', $encoding);
   // $text = mb_convert_encoding($text, 'UTF-8'); // ✅ Force UTF-8 encoding

    $client = \Config\Services::curlrequest();

    try {
        // Assume auto-detection if language detection is unavailable
        if (preg_match('/\b(saya|anda|tidak|akan|boleh|kerana)\b/i', $text)) {
            $lang = 'ms';
        } elseif (preg_match('/[a-z]/i', $text)) {
            $lang = 'en'; // contains English letters
        } else {
            $lang = 'fr'; // or something default
        }
    
        // Skip translation if it's English or Malay
        if (in_array($lang, ['en', 'ms'])) {
            return [$text, $text, false];
        }
    
    
        $translate = $client->post('https://libretranslate.com/translate', [
            'headers' => ['Content-Type' => 'application/json'],
            'json' => [
                'q' => $text,
                'source' => $lang,  // let the API auto-detect
                'target' => 'en',
            ]
        ]);
    
        $translatedText = json_decode($translate->getBody(), true)['translatedText'] ?? $text;
        log_message('debug', 'Detected language: ' . $translatedText);
        return [$text, $translatedText, true];
    
    } catch (\Exception $e) {
        log_message('error', 'Translation failed: ' . $e->getMessage());
        return [$text, $text, false]; // fallback
    }
    

    return [$text, $text, false]; // no translation needed

    // Detect language
    // try {
    //     $detect = $client->post('https://libretranslate.com/detect', [
    //         'headers' => ['Content-Type' => 'application/x-www-form-urlencoded'],
    //         'form_params' => ['q' => $text],
    //     ]);
    //     $langData = json_decode($detect->getBody(), true);
    //    // $lang = $langData[0]['language'] ?? 'unknown';
    //    // Check the response and get the detected language
    //    if (isset($langData[0]['language'])) {
    //     $lang = $langData[0]['language'];
    // } else {
    //     throw new \Exception('Language detection failed with no result');
    // }

    //       // 🔍 Log detected language here
    //       log_message('debug', 'Detected language: ' . $lang);

    // } catch (\Exception $e) {
    //     log_message('error', 'Language detection failed: ' . $e->getMessage());
    //     return [$text, $text, false]; // fallback
    // }

    // // Only translate if not Malay (ms) or English (en)
    // if (!in_array($lang, ['ms', 'en'])) {
    //     try {
    //         $translate = $client->post('https://libretranslate.com/translate', [
    //             'headers' => ['Content-Type' => 'application/x-www-form-urlencoded'],
    //             'form_params' => [
    //                 'q' => $text,
    //                 'source' => $lang,
    //                 'target' => 'en',
    //                 'format' => 'text',
    //             ]
    //         ]);
    //         $translatedText = json_decode($translate->getBody(), true)['translatedText'] ?? $text;
    //         return [$text, $translatedText, true];
    //     } catch (\Exception $e) {
    //         log_message('error', 'Translation failed: ' . $e->getMessage());
    //         return [$text, $text, false]; // fallback
    //     }
    // }

    // return [$text, $text, false]; // no translation needed
}
