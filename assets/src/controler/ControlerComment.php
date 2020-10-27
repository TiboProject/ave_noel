<?php

namespace App\controler;
use App\Repository\PostRepository;
use App\Repository\CommentRepository;
use App\model\Comment;

Class ControlerComment
{

    private $commentRepository;
    private $postRepository;

    public function __construct(){
        if(!isset($this->commentRepository)){
            $this->commentRepository = new CommentRepository();
        }

        if(!isset($this->postRepository)){
            $this->postRepository = new PostRepository();
        }
    }

    public function show(){
        $resultPost = $this->postRepository->get_post($_GET['id']);
        $resultComment = $this->commentRepository->get_comments($_GET['id']);
        require('assets/src/view/commentView.php');
    }

    public function create(){

        if($_SERVER['REQUEST_METHOD'] === 'POST'){ ///On vérifie qu'il a submit ou pas
            $comment =new Comment();
            $comment->setIdClient($_POST['idClient']);
            $comment->setContent($_POST['content']);
            $comment->setIdPost($_POST['id']);
            $this->commentRepository->add_comment($comment);
            header('Location: index.php?page=comment&id='.$comment->getIdPost());
            
        }

        if(isset($_GET['id'])){
            require 'assets/src/view/createCommentView.php';
        }
        
    }

    public function read(){

    }

    public function update(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){ ///On vérifie qu'il a submit ou pas
            $comment =new Comment();
            $comment->setContent($_POST['content']);
            $comment->setId($_POST['idComment']);
            $this->commentRepository->update_comment($comment);
            header('Location: index.php?page=post&action=show');
            
        }
        if(isset($_GET['id'])){
            $id_comment=$_GET['id'];
            $comments=$this->commentRepository->get_comment($id_comment);
            require 'assets/src/view/updateCommentView.php';
        }
    }

    public function delete()
    {
        if(isset($_GET['id'])){
            $id_comment=$_GET['id'];
            $this->commentRepository->delete_comment($id_comment);
            header('Location: index.php?page=post&action=show');
        }

    }


}