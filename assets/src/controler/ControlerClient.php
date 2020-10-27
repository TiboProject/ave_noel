<?php

namespace App\controler;
use App\Repository\ClientRepository;

Class ControlerClient 
{

    private $clientRepository;

    public function __construct(){
        if(!isset($this->clientRepository)){
            $this->clienttRepository = new ClientRepository();
        }
    }
    

    public function list()
    {
        $clients = $this->clientRepository->get_clients();
        var_dump($clients);
        die;
    }

    public function create()
    {

    }

    public function read(){

    }

    public function update(){

    }

    public function delete(){
            
    }
}
?>