<?php

putenv("INFORMIXDIR=/opt/IBM/informix");
putenv("INFORMIXSERVER=unisza_prod01");
putenv("LD_LIBRARY_PATH=/opt/IBM/informix/lib/:/opt/IBM/informix/lib/cli:/opt/IBM/informix/lib/esql");
putenv("PATH=/usr/local/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/opt/IBM/informix/bin:/opt/IBM/informix/lib");

return [
    'host'     => '172.17.2.141',
    'service'  =>  60003,//1526,
    'database' => 'sismak',
    'server'   => 'unisza_prod',
    'username' => 'alyani',
    'password' => 'alyani@informix',
    'protocol' => 'onsoctcp',
];
