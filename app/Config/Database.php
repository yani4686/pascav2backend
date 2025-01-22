<?php

namespace Config;

use CodeIgniter\Database\Config;

/**
 * Database Configuration
 */
class Database extends Config
{
    /**
     * The directory that holds the Migrations
     * and Seeds directories.
     */
    public string $filesPath = APPPATH . 'Database' . DIRECTORY_SEPARATOR;

    /**
     * Lets you choose which connection group to
     * use if no other is specified.
     */
    public string $defaultGroup = 'default';

    /**
     * The default database connection.
     *
     * @var array<string, mixed>
     */

     public array   $default  = [
        'DSN'      => '',
        'hostname' => 'localhost',
        'username' => 'postgres', //other login developer
        'password' => '12345', //dev_unisza2024
        'database' => 'postgres',
        'DBDriver' => 'Postgre',
        'DBPrefix' => '',
        'pConnect' => false,
        'DBDebug'  => true,
        'charset'  => 'utf8',
        'DBCollat' => 'utf8_general_ci',
        'swapPre'  => '',
        'encrypt'  => false,
        'compress' => false,
        'strictOn' => false,
        'failover' => [],
        'port'     => 5432,
    ];

    public array $thirdDB = [
        'DSN'          => '',
        'hostname'     => 'localhost',
        'username'     => 'root',
        'password'     => '',
        'database'     => 'localdbpps',
        'DBDriver'     => 'MySQLi',
        'DBPrefix'     => '',
        'pConnect'     => false,
        // 'DBDebug'      => true,
        'DBDebug'      => (ENVIRONMENT !== 'development'),
        'charset'      => 'utf8',
        'DBCollat'     => 'utf8_general_ci',
        'swapPre'      => '',
        'encrypt'      => false,
        'compress'     => false,
        'strictOn'     => false,
        'failover'     => [],
        'port'         => 3306,
        'numberNative' => false,
    ];

    public array $secondDB = [
        'DSN'   => '',
        'hostname' => '172.17.2.198',
        'username' => 'postgres', //other login developer
        'password' => 'post_12345', //dev_unisza2024
        'database' => 'unisza',
        'DBDriver' => 'Postgre',
        'DBPrefix' => '',
        'pConnect' => false,
        'DBDebug'  => true,
        'charset'  => 'utf8',
        'DBCollat' => 'utf8_general_ci',
        'swapPre'  => '',
        'encrypt'  => false,
        'compress' => false,
        'strictOn' => false,
        'failover' => [],
        'port'     => 5432,
    ];

    //  public array $fourthDB = [

    // //      // Load external configuration
    // //      $config = require ROOTPATH . '/ThirdParty/Informix/InformixTest.php';
    // //     'DSN'      => sprintf("informix:host=%s;service=%d;database=%s;server=%s;protocol=%s",$config['host'],$config['service'],$config['database'],$config['server'],$config['protocol']),
    //      'DSN'      => 'informix:host=uniszadb.unisza.edu.my;service=60003;database=sismak;server=unisza_prod;protocol=onsoctcp',
    // //     'hostname' => '',
    //      'username' => 'alyani',
    //      'password' => 'alyani@informix',
    // //     'database' => '',
    //      'DBDriver' => 'pdo',
    // //     'DBPrefix' => '',
    // //     'pConnect' => false,
    // //     'DBDebug'  => true,
    // //     'charset'  => 'utf8',
    // //     'port'     => '',

    //  ];


    /**
     * This database connection is used when
     * running PHPUnit database tests.
     *
     * @var array<string, mixed>
     */
    public array $tests = [
        'DSN'         => '',
        'hostname'    => '127.0.0.1',
        'username'    => '',
        'password'    => '',
        'database'    => ':memory:',
        'DBDriver'    => 'SQLite3',
        'DBPrefix'    => 'db_',  // Needed to ensure we're working correctly with prefixes live. DO NOT REMOVE FOR CI DEVS
        'pConnect'    => false,
        'DBDebug'     => true,
        'charset'     => 'utf8',
        'DBCollat'    => 'utf8_general_ci',
        'swapPre'     => '',
        'encrypt'     => false,
        'compress'    => false,
        'strictOn'    => false,
        'failover'    => [],
        'port'        => 3306,
        'foreignKeys' => true,
        'busyTimeout' => 1000,
    ];

    public function __construct()
    {
        parent::__construct();

        // Ensure that we always set the database group to 'tests' if
        // we are currently running an automated test suite, so that
        // we don't overwrite live data on accident.
        if (ENVIRONMENT === 'testing') {
            $this->defaultGroup = 'tests';
        }
    }
}
