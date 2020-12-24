<?php

namespace App\controler;
use App\Repository\PostRepository;
use App\model\Post;

Class ControlerPost 
{

    private $postRepository;

    public function __construct()
    {
        if(!isset($this->postRepository)){
            $this->postRepository = new PostRepository();
        }
    }

    public function show()
    {
        $posts = $this->postRepository->get_posts();
        require 'assets/src/view/indexView.php';

    }

    public function create()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){ ///On vérifie qu'il a submit ou pas
            $post =new Post();
            $post->setIdClient($_POST['idClient']);
            $post->setContent($_POST['content']);
            $post->setTitle($_POST['title']);
            $this->postRepository->add_post($post);
            header('Location: index.php?page=post&action=show');
        }
        
        require 'assets/src/view/createPostView.php';
        

    }

    public function read()
    {
        if(isset($_GET['id'])){
            $id_post=$_GET['id'];
            $posts = $this->postRepository->get_post($id_post);
            require 'assets/src/view/indexView.php';
        }
    }

    public function update()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){ ///On vérifie qu'il a submit ou pas
            $post =new Post();
            $post->setIdClient($_POST['idClient']);
            $post->setContent($_POST['content']);
            $post->setTitle($_POST['title']);
            $post->setId($_POST['idPost']);
            $this->postRepository->update_post($post);
            header('Location: index.php?page=post&action=show');
            
        }
        if(isset($_GET['id'])){
            $id_post=$_GET['id'];
            $posts=$this->postRepository->get_post($id_post);
            require 'assets/src/view/updatePostView.php';
        }
    }

    public function delete()
    {
        if(isset($_GET['id'])){
            $id_post=$_GET['id'];
            $this->postRepository->delete_post($id_post);
            header('Location: index.php?page=post&action=show');
        }

    }
}
?>