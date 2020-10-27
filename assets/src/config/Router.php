<?php

namespace App\config;

use App\controler\ControlerPost;
use App\controler\ControlerClient;
use App\controler\ControlerDefault;
use App\controler\ControlerComment;
use App\controler\ControlerCreate;

Class Router
{
    public function loadRoutes()
    {
        try{
            if(isset($_GET['page'])){
                if($_GET['page'] === 'post'){
                    $controller = new ControlerPost();
                    
                } elseif($_GET['page'] === 'client'){
                    $controller=new ControlerClient();
                    
                } elseif($_GET['page'] === 'comment'){
                    $controller=new ControlerComment();
                    
                } 
            }
            else{
                $controller = new ControlerDefault();
            }
            if(isset($_GET['action'])){
                $action = $_GET['action'];
                $controller->{$action}();
            }
            else{
                $controller->show();
            }
        }catch(\Exception $exception){
            throw new \Exception('Error occured') ;
        }
    }

}