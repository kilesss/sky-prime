<?php

namespace Controllers\Models;

include_once 'system/PDODb.php';
use PDODb;

/**
 *
 */
class Core
{

    /**
     * @var PDODb
     */
    public $db;

    /**
     *
     */
    public function __construct()
    {
        $this->db = $this->makePDOConnection();
    }

    /**
     * @return PDODb
     */
    public function makePDOConnection()
    {
        return new PDODb(['type' => 'mysql',
            'host' => parseEnv('DB_host'),
            'username' => parseEnv('DB_username'),
            'password' => parseEnv('DB_password'),
            'dbname'=> parseEnv('DB_dbname'),
            'port' => parseEnv('DB_port'),
            'charset' => parseEnv('DB_charset')
        ]);
    }
}