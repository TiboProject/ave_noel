<?php


    namespace App\src\model;
    require_once('vendor\autoload.php');
    use App\src\config\Database;

    Class Client{

        private $id;
        private $firstName;
        private $lastName;
        private $email;
        private $password;
        private $isAdmin;
        private $avatarPath;
        private $lastConnection;


        public function getFirstName(): string{
            return $this->firstName;
        }

        public function setFirstName(string $firstName){
            $this->firstName=$firstName;
        }


    }


?>