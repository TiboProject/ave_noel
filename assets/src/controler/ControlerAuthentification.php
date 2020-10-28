<?php

namespace App\controler;

use App\Repository\ClientRepository;
use App\config\Session;
use App\model\Client;

Class ControlerAuthentification{

    private $clientRepository;
    private $session;

    public function __construct(){
        if(!isset($this->clientRepository)){
            $this->clientRepository = new ClientRepository();
        }
        if(!isset($this->session)){
            $this->session = new Session();
        }
    }

    public function show(){
        require 'assets/src/view/authentificationView.php';
    }

    public function create(){

        if($_SERVER['REQUEST_METHOD'] === 'POST'){ ///On vérifie qu'il a submit ou pas
            $client =new Client();
            $client->setFirstName($_POST['firstName']);
            $client->setLastName($_POST['lastName']);
            $client->setEmail($_POST['mail']);
            $client->setUsername($_POST['username']);
            $client->setPassword(password_hash($_POST['password'], PASSWORD_DEFAULT));
            $client->setStateAdmin(false);
            $this->clientRepository->add_client($client);
            header('Location: index.php?page=post&action=show');
        }
        require 'assets/src/view/premiereConnexionView.php';
    }

    public function connect(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){ 
            $password_db = $this->clientRepository->get_password_client($_POST['mail']);    
            $password_sent = $_POST['password'];
            $client=new Client();
            $client->setEmail($_POST['mail']);
            $client->setPassword($password_db['password']);
            if(password_verify($password_sent, $password_db['password'])==true){
                $this->clientRepository->client_connection($client);
                $this->session->set('mail',$client->getEmail());
                header('Location: index.php?page=post&action=show');    
            }
            
            $this->session->set('errorLogin', "Votre e-mail ou votre mot de passe est incorrect");            
        }
        require 'assets/src/view/authentificationView.php';
    }

    public function deconnect(){
        $this->session->stop();
        header('Location: index.php');
    }

}
?>