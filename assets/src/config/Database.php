<?php

    namespace App\config;
    require_once 'vendor/autoload.php';

    class Database
    {
        const DB_HOST = 'mysql:host=localhost;dbname=avenoel;charset=utf8';
        const DB_USER = 'root';
        const DB_PASSWORD = '';
        private $connection;

        public function getConnection()
        {
            $servername = 'localhost';
            $username = 'root';
            $password = '';

            try{
                $this->connection = new \PDO(self::DB_HOST, self::DB_USER, self::DB_PASSWORD);
                return $this->connection;
            }catch(PDOException $exception){
            	die("Erreur : " . $exception->getMessage()."<br>");
            }
        }

        public function checkConnection() {
            if(!isset($this->connection)){
                return $this->getConnection();
            }
            return $this->connection;
        }
    }
    ?>