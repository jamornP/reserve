<?php
namespace App\Model;

use App\Database\Db;

class Reserve extends Db {

    public function getAllManager(){
        $sql ="
            SELECT * FROM tb_bookreserve
        ";
        $stmt=$this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }
}
?>