<?php

namespace App\Repository;
require_once 'vendor/autoload.php';
use App\config\Database;
use App\model\Post;

class PostRepository{

    public function get_posts(){

        $database = new Database();
        $conn = $database->checkConnection();
        $result = $conn->query('SELECT cli.username, post.content, post.title, post.id, deleted_at, post.id_client,  
                                DATE_FORMAT(post.created_at, \'%d/%m/%Y à %Hh%imin%ss\') AS date,
                                DATE_FORMAT(post.updated_at, \'%d/%m/%Y à %Hh%imin%ss\') AS date_modif
                                FROM post  
                                LEFT OUTER JOIN client cli ON cli.id = post.id_client');
        return $result;
    }

    public function get_post(int $id_post){

        $database = new Database();
        $conn = $database->checkConnection();
        $result = $conn->prepare('SELECT cli.username, post.content, post.title, post.id, post.deleted_at, post.id,
                                  DATE_FORMAT(post.created_at, \'%d/%m/%Y à %Hh%imin%ss\') AS date,
                                  DATE_FORMAT(post.updated_at, \'%d/%m/%Y à %Hh%imin%ss\') AS date_modif 
                                  FROM post  
                                  LEFT OUTER JOIN client cli ON cli.id = post.id_client WHERE post.id = :id');
        $result->bindValue(':id',$id_post,\PDO::PARAM_INT);
        $result->execute();
        return $result;
    }

    public function add_post(Post $post){
        $database = new Database();
        $conn = $database->checkConnection();
        $result = $conn->prepare('INSERT INTO post (id_client, content, title, created_at, updated_at, deleted_at)
        VALUES (:id_client, :content, :title, :created_at, :updated_at, :deleted_at)');
        $result->bindValue(':id_client', $post->getIdClient(), \PDO::PARAM_INT);
        $result->bindValue(':content', $post->getContent(), \PDO::PARAM_STR);
        $result->bindValue(':title', $post->getTitle(), \PDO::PARAM_STR);
        $result->bindValue(':created_at', date('Y-m-d H:i:s'), \PDO::PARAM_STR);
        $result->bindValue(':updated_at', NULL);
        $result->bindValue(':deleted_at', NULL);
        $result->execute();
    }


    public function update_post(Post $post){
        $database = new Database();
        $conn = $database->checkConnection();
        $result = $conn->prepare('UPDATE post SET title = :title, content = :content, updated_at = :updated_at WHERE id = :id_post');
        $result->bindValue(':title', $post->getTitle(), \PDO::PARAM_STR);
        $result->bindValue(':content', $post->getContent(), \PDO::PARAM_STR);
        $result->bindValue(':updated_at', date('Y-m-d H:i:s'), \PDO::PARAM_STR);
        $result->bindValue(':id_post',$post->getId(),\PDO::PARAM_INT);
        $result->execute();
    }

    public function delete_post(int $id_post){
        $database = new Database();
        $conn = $database->checkConnection();
        $result = $conn->prepare('UPDATE post SET deleted_at = :deleted_at WHERE id = :id_post');
        $result->bindValue(':deleted_at', date('Y-m-d H:i:s'), \PDO::PARAM_STR);
        $result->bindValue(':id_post',$id_post,\PDO::PARAM_INT);
        $result->execute();
    }
}


?>