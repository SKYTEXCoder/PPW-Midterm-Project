<?php
    include "connect.php";
    
    function get_table($conn, $table, $column){
        $sql = "SELECT $column FROM $table ASC";
        $result = $conn->query($sql);
        
        if ($result && $result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }

    function all_table($conn, $table){
        $sql = "SELECT * FROM $table ORDER BY idProduk ASC";
        $result = $conn->query($sql);
        
        if ($result && $result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }

    function get_cart_details($conn, $userId){
        $sql = "
            SELECT user.*, produk.*, keranjang.*
            FROM keranjang
            JOIN user ON keranjang.idUser = user.idUser
            JOIN produk ON keranjang.idProduk = produk.idProduk
            WHERE keranjang.iduser = ?
        ";

        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die("Preparation failed: " . $conn->error);
        }
        
        $stmt->bind_param("i", $userId);
        
        $stmt->execute();
        
        $result = $stmt->get_result();
        
        if ($result && $result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC); 
        } else {
            return [];
        }
    }
?>