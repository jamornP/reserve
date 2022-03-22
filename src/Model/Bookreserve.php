<?php
namespace App\Model;

use App\Database\Db;

class Book extends Db {

    public fundtion getAllBook() {
        $sql = "
            SELECT * 
            FROM tb_bookreserve
        ";
        $stms = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }
}
?>