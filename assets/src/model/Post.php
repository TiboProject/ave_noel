<?php


    namespace App\model;
    require_once('vendor\autoload.php');
    use App\config\Database;

    Class Post{

        private $id;
        private $id_client;
        private $content;
        private $title;
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

        public function getContent(): string{
            return $this->content;
        }

        public function setContent(string $content){
            $this->content=$content;
        }
        
        public function getTitle(): string{
            return $this->title;
        }

        public function setTitle(string $title){
            $this->title=$title;
        }

        public function getCreated_at(): date{
            return $this->created_at;
        }

        public function setCreated_at(date $created_at){
            $this->created_at=$created_at;
        }


    }

?>