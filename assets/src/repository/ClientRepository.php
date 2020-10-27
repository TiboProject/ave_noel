<?php

namespace App\src\Repository;
require_once '../vendor/autoload.php';
use App\src\config\Database;

class ClientRepository{

    public function get_clients(){

        $database=new Database();
        $conn=$database->getConnection();
        $result = $conn->query('SELECT * FROM client');
        return $result->fetchAll();
    }
}


?>