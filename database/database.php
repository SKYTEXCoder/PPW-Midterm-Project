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

    function all_table($conn, $table, $search_term = ""){
        $sql = "SELECT * FROM $table";
        if (!empty($search_term)) {
            $sql .= " WHERE namaProduk LIKE ?";
            $search_term = "%" . $search_term . "%";
        }
        $sql .= " ORDER BY idProduk ASC";
        $stmt = $conn->prepare($sql);
        if (!empty($search_term)) {
            $stmt->bind_param("s", $search_term);
        }
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result && $result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }

    function get_products_by_shopname($conn, $shop_name) {
        $sql = "SELECT * FROM produk WHERE namaPenjual = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $shop_name);
        $stmt->execute();
        $result = $stmt->get_result();
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

    function get_user_details($conn, $userId) {
        $sql = "SELECT * FROM user WHERE idUser = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result && $result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return [];
        }
    }
    function get_product_details($conn, $productId) {
        $sql = "SELECT * FROM produk WHERE idProduk = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $productId);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result && $result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return [];
        }
    }
?>