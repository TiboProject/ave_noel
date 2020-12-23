<?php


    namespace App\model;
    require_once('vendor/autoload.php');
    use App\config\Database;

    Class Client{

        private $id;
        private $firstName;
        private $lastName;
        private $username;
        private $email;
        private $password;
        private $isAdmin;
        private $avatarPath;
        private $lastConnection;

        public function getId(): int{
            return $this->id;
        }

        public function setId(int $id){
            $this->id = $id;
        }

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

        public function getUsername(): string{
            return $this->username;
        }

        public function setUsername(string $username){
            $this->username = $username;
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

        public function getStateAdmin(): bool{
            return $this->isAdmin;
        }

        public function setStateAdmin( bool $isAdmin) {
            $this->isAdmin=$isAdmin;
        }


    }


?>