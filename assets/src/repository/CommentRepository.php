<?php

namespace App\Repository;
require_once 'vendor/autoload.php';

use App\config\Database;
use App\model\Comment;
class CommentRepository{

    public function get_all_comments()
    {
        $database=new Database();
        $conn=$database->checkConnection();
        $result = $conn->query('SELECT * FROM comment');
        return $result;
    }

    public function get_comments($id_post)
    {   
        $database=new Database();
        $conn=$database->checkConnection();
        $result = $conn->prepare('SELECT cli.username, comment.id_post,
                                  comment.content, comment.created_at, comment.deleted_at, comment.id, comment.id_client,
                                  DATE_FORMAT(comment.created_at, \'%d/%m/%Y à %Hh%imin%ss\') AS date,
                                  DATE_FORMAT(comment.updated_at, \'%d/%m/%Y à %Hh%imin%ss\') AS date_modif
                                  FROM comment 
                                  LEFT OUTER JOIN client cli ON cli.id = comment.id_client
                                  WHERE comment.id_post = ? 
                                  ORDER BY date DESC');
        $result->execute(array($id_post));
        return $result;

    }

    public function get_comment(int $id_comment)
    {
        $database = new Database();
        $conn = $database->checkConnection();
        $result = $conn->prepare('SELECT cli.username, comment.content, comment.deleted_at, comment.id, comment.id_client,
                                  DATE_FORMAT(comment.created_at, \'%d/%m/%Y à %Hh%imin%ss\') AS date,
                                  DATE_FORMAT(comment.updated_at, \'%d/%m/%Y à %Hh%imin%ss\') AS date_modif 
                                  FROM comment  
                                  LEFT OUTER JOIN client cli ON cli.id = comment.id_client WHERE comment.id = :id');
        $result->bindValue(':id',$id_comment,\PDO::PARAM_INT);
        $result->execute();
        return $result;
    }

    public function add_comment(Comment $comment)
    {
        $database=new Database();
        $conn=$database->checkConnection();
        $result = $conn->prepare('INSERT INTO comment (id_client, id_post, content, created_at, updated_at, deleted_at)
        VALUES (:id_client, :id_post, :content, :created_at, :updated_at, :deleted_at)');
        $result->bindValue(':id_client', $comment->getIdClient(), \PDO::PARAM_INT);
        $result->bindValue(':id_post', $comment->getIdPost(), \PDO::PARAM_INT);
        $result->bindValue(':content', $comment->getContent(), \PDO::PARAM_STR);
        $result->bindValue(':created_at', date('Y-m-d H:i:s'), \PDO::PARAM_STR);
        $result->bindValue(':updated_at', NULL);
        $result->bindValue(':deleted_at', NULL);
        $result->execute();

    }

    public function update_comment(Comment $comment)
    {
        $database = new Database();
        $conn = $database->checkConnection();
        $result = $conn->prepare('UPDATE comment SET content = :content, updated_at = :updated_at WHERE id = :id_comment');
        $result->bindValue(':content', $comment->getContent(), \PDO::PARAM_STR);
        $result->bindValue(':updated_at', date('Y-m-d H:i:s'), \PDO::PARAM_STR);
        $result->bindValue(':id_comment',$comment->getId(),\PDO::PARAM_INT);
        $result->execute();
    }

    public function delete_comment(int $id_comment)
    {
        $database = new Database();
        $conn = $database->checkConnection();
        $result = $conn->prepare('UPDATE comment SET deleted_at = :deleted_at WHERE id = :id_comment');
        $result->bindValue(':deleted_at', date('Y-m-d H:i:s'), \PDO::PARAM_STR);
        $result->bindValue(':id_comment',$id_comment,\PDO::PARAM_INT);
        $result->execute();
    }
}


?>