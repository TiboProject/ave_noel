<?php

namespace App\src\Repository;
use App\src\config\Database;

class PostRepository{

    public function get_posts(){

        $database=new Database();
        $conn=$database->getConnection();
        $result = $conn->query('SELECT * FROM post');
        return $result->fetchAll();
    }
}


?>