<?php


    namespace App\src\model;
    require_once('vendor\autoload.php');
    use App\src\config\Database;

    Class Post{

        private $id;
        private $id_client;
        private $content;
        private $title;
        private $created_at;
        private $updated_at;
        private $deleted_at;

        
        public function getContent(): string{
            return $this->content;
        }

        public function setContent(string $content){
            $this->content=$content;
        }
        
        public function getTitle(): string{
            return $this->title;
        }

        public function setTitle(string $content){
            $this->title=$title;
        }

    }

?>