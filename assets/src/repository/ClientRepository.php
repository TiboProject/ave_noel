<?php

namespace App\Repository;
require_once 'vendor/autoload.php';

use App\config\Database;

class ClientRepository{

    public function get_clients(){

        $database=new Database();
        $conn=$database->checkConnection();
        $result = $conn->query('SELECT * FROM client');
        return $result->fetchAll();
    }
}


?>