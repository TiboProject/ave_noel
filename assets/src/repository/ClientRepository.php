<?php

namespace App\Repository;
require_once 'vendor/autoload.php';

use App\config\Database;
use App\model\Client;

class ClientRepository{

    public function get_clients(){

        $database=new Database();
        $conn=$database->checkConnection();
        $result = $conn->query('SELECT * FROM client');
        return $result->fetchAll();
    }

    public function add_client(Client $client){
        $database = new Database();
        $conn = $database->checkConnection();
        $result = $conn->prepare('INSERT INTO client (username, mail, nom, prenom, password, isadmin, avatar_path, last_connection_at)
        VALUES (:username, :mail, :nom, :prenom, :password, :isadmin, :avatar_path, :last_connection_at)');
        $result->bindValue(':username', $client->getUsername(), \PDO::PARAM_STR);
        $result->bindValue(':mail', $client->getEmail(), \PDO::PARAM_STR);
        $result->bindValue(':nom', $client->getLastName(), \PDO::PARAM_STR);
        $result->bindValue(':prenom', $client->getFirstName(), \PDO::PARAM_STR);
        $result->bindValue(':password', $client->getPassword(), \PDO::PARAM_STR);
        $result->bindValue(':isadmin', $client->getStateAdmin(), \PDO::PARAM_STR);
        $result->bindValue(':avatar_path', NULL);
        $result->bindValue(':last_connection_at',NULL);
        $result->execute();
    }

    public function get_password_client(string $mail){

        $database = new Database();
        $conn = $database->checkConnection();
        $result = $conn->prepare('SELECT password
                                  FROM client  
                                  WHERE mail = :mail');
        $result->bindValue(':mail',$mail,\PDO::PARAM_STR);
        $result->execute();
        return $result->fetch();
    }

    public function get_id_client(string $mail){

        $database = new Database();
        $conn = $database->checkConnection();
        $result = $conn->prepare('SELECT id
                                  FROM client  
                                  WHERE mail = :mail');
        $result->bindValue(':mail',$mail,\PDO::PARAM_STR);
        $result->execute();
        return $result->fetch();
    }

    public function client_connection(Client $client){
        $database = new Database();
        $conn = $database->checkConnection();
        $result = $conn->prepare('UPDATE client SET last_connection_at = :last_connection_at WHERE mail = :mail');
        $result->bindValue(':last_connection_at',date('Y-m-d H:i:s'), \PDO::PARAM_STR );
        $result->bindValue('mail',$client->getEmail(), \PDO::PARAM_STR);
        $result->execute();
    }
}


?>