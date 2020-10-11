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

        public function getLastName(): string{
            return $this->lastName;
        }

        public function setLastName(string $lastName){
            $this->lastName=$lastName;
        }

        public function getEmail(): string{
            return $this->email;
        }

        public function setEmail(string $email) {
            $this->email=$email;
        }
        
        public function getPassword(): string{
            return $this->password;
        }

        public function setPassword(string $password) {
            $this->password=$password;
        }

        public function getStateAdmin(): boolean{
            return $this->isAdmin;
        }

        public function setStateAdmin(boolean $isAdmin) {
            $this->isAdmin=$isAdmin;
        }


    }


?>