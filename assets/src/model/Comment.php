<?php


    namespace App\src\model;
    require_once('vendor\autoload.php');
    use App\src\config\Database;

    Class Comment{

        private $id;
        private $id_client;
        private $id_post;
        private $content;
        private $created_at;
        private $updated_at;
        private $deleted_at;

        public function getFirstName(): string{
            return $this->firstName;
        }

        public function setFirstName(string $firstName){
            $this->firstName=$firstName;
        }


    }


?>