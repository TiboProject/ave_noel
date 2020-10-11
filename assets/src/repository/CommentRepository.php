<?php

namespace App\src\Repository;
use App\src\config\Database;

class CommentRepository{

    public function get_comments(){

        $database=new Database();
        $conn=$database->getConnection();
        $result = $conn->query('SELECT * FROM comment');
        return $result->fetchAll();
    }
}


?>