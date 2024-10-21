<?php

namespace App\DB;

use PDO;
use PDOException;

    class Database extends PDO {

        private static $instance;

        private const DBHOST = "localhost";
        private const DBUSER = "root";
        private const DBPASS = "";
        private const DBNAME = "gite_tymimi";

        private function __construct() {

            $_dsn = 'mysql:dbname=' .self::DBNAME. ';host=' .self::DBHOST;

            try {

                parent::__construct($_dsn, self::DBUSER, self::DBPASS);

                $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAME utf8');
                $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                die($e->getMessage());
            }
        }

        // Fonction pour obtenir la connexion
        public static function getInstance(): self {
            
            if(self::$instance === null) {
                self::$instance = new self();
            }

            return self::$instance;
        }
    }
?>    