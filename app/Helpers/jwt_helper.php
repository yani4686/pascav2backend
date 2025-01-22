<?php

use App\Models\UserModel;
use Config\Services;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function getJWTFromRequest(): string
{
    //$authenticationHeader = apache_request_headers();
    $authenticationHeader = getallheaders();
    log_message('info', 'test1'.implode(" ",$authenticationHeader));
    // Server-side fix for bug in old Android versions (a nice side-effect of this fix means we don't care about capitalization for Authorization)
    //$authenticationHeader = array_combine(array_map('ucwords', array_keys($requestHeaders)), array_values($requestHeaders));
    if (is_null($authenticationHeader)) { //JWT is absent
        throw new Exception('Missing or invalid JWT in request:');
    }
    //JWT is sent from client in the format Bearer XXXXXXXXX
    return $authenticationHeader["Authorization"];
}

function validateJWTFromRequest(string $encodedToken)
{
    $key = Services::getSecretKey();
    // throw new Exception('1:'.$encodedToken);
    $decodedToken = JWT::decode($encodedToken, new Key($key, 'HS256'));
    //log_message('info', 'test'.$decodedToken->email);
    //throw new Exception('1:'.$decodedToken);
    $userModel = new UserModel();
    $userModel->findUserByEmailAddress($decodedToken->email);
}

function getSignedJWTForUser(string $email)
{
    $issuedAtTime = time();
    $tokenTimeToLive = getenv('JWT_TIME_TO_LIVE');
    $tokenExpiration = $issuedAtTime + $tokenTimeToLive;
    $payload = [
        'email' => $email,
        'iat' => $issuedAtTime,
        'exp' => $tokenExpiration,
    ];

    $jwt = JWT::encode($payload, Services::getSecretKey(), 'HS256');
    return $jwt;
}
