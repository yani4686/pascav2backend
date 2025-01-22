<?php
putenv("INFORMIXDIR=/opt/IBM/Informix_Client-SDK/");
putenv("INFORMIXSERVER=unisza_prod");
putenv("LD_LIBRARY_PATH=/opt/IBM/Informix_Client-SDK/lib/:/opt/IBM/Informix_Client-SDK/lib/cli:/opt/IBM/Informix_Client-SDK/lib/esql");
putenv("PATH=/usr/local/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/opt/IBM/Informix_Client-SDK/bin:/opt/IBM/Informix_Client-SDK/lib");

function informix_connect() {
     // $db = new PDO("informix:host=172.17.2.141; service=60003; database=sismak; server=unisza_prod; protocol=onsoctcp; EnableScrollableCursors=1", "solahuddin", "solahuddin@informix", array(PDO::ATTR_PERSISTENT => false)); // asal
   //  $db = new PDO("informix:host=uniszadb.unisza.edu.my; service=60003; database=sismak; server=unisza_prod; protocol=onsoctcp; EnableScrollableCursors=1", "rpa_saga", "saga@21300", array(PDO::ATTR_PERSISTENT => false));
     $db = new PDO("informix:host=uniszadb.unisza.edu.my; service=60003; database=sismak; server=unisza_prod; protocol=onsoctcp; EnableScrollableCursors=1", "alyani", "alyani@informix", array(PDO::ATTR_PERSISTENT => false));
     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
     $db->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, true);
     return $db;    
}
function informix_query($query)
{
    //echo "Connection Established!<br><br>";
    $db = informix_connect();
    // return $db;
    $stmt = $db->prepare($query);
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $res;
}
