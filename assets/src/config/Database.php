<?php

    namespace App\src\config;

    class Database
    {
        const DB_HOST = 'mysql:host=localhost;dbname=avenoel;charset=utf8';
        const DB_USER = 'root';
        const DB_PASSWORD = '';

        public function getConnection()
        {
            $servername = 'localhost';
            $username = 'root';
            $password = '';

            try{
                $conn = new \PDO(self::DB_HOST, self::DB_USER, self::DB_PASSWORD);
                return $conn;
            }catch(PDOException $exception){
              die("Erreur : " . $exception->getMessage()."<br>");
            }
        }
    }