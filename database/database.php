<?php
    include "connect.php";
    
    function get_table($conn, $table, $column){
        $sql = "SELECT $column FROM $table ORDER BY $column ASC";
        $result = $conn->query($sql);
        
        if ($result && $result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }

    function get_items_by_category($conn, $category) {
        $sql = "SELECT * FROM produk WHERE kategoriProduk = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $category);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result && $result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }

    function get_unique_column($conn, $table, $column) {
        $sql = "SELECT DISTINCT $column FROM $table ORDER BY $column ASC";
        $result = $conn->query($sql);
        
        if ($result && $result->num_rows > 0) {
            return array_column($result->fetch_all(MYSQLI_ASSOC), $column);
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