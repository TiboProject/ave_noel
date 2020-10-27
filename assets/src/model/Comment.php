<?php


    namespace App\model;
    require_once('vendor/autoload.php');
    use App\config\Database;

    Class Comment{

        private $id;
        private $id_client;
        private $id_post;
        private $content;
        private $created_at;
        private $updated_at;
        private $deleted_at;

        public function getId(): int{
            return $this->id;
        }

        public function setId(int $id){
            $this->id=$id;
        }

        public function getIdClient(): int{
            return $this->id_client;
        }

        public function setIdClient(int $id_client){
            $this->id_client=$id_client;
        }

        public function getIdPost(): int{
            return $this->id_post;
        }

        public function setIdPost(int $id_post){
            $this->id_post=$id_post;
        }

        public function getCreationDate(): date{
            return $this->created_at;
        }

        public function setCreationDate(int $created_at){
            $this->created_at=$created_at;
        }

        public function getContent(): string{
            return $this->content;
        }

        public function setContent(string $content){
            $this->content=$content;
        }

        

    }


?>