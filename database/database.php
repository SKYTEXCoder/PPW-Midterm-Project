<?php
include "connect.php";

function get_table($conn, $table, $column)
{
    $sql = "SELECT $column FROM $table ORDER BY $column ASC";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

function get_table_details($conn, $table, $column, $var)
{
    $sql = "SELECT * FROM $table WHERE $column = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $var);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result && $result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

function get_items_by_category($conn, $category)
{
    if (empty($category)) {
        $sql = "SELECT * FROM produk"; // No WHERE clause, so it selects all items
        $stmt = $conn->prepare($sql);
    } else {
        $sql = "SELECT * FROM produk WHERE kategoriProduk = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $category);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result && $result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

function get_unique_column($conn, $table, $column)
{
    $sql = "SELECT DISTINCT $column FROM $table WHERE $column IS NOT NULL AND $column != '' ORDER BY $column ASC";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        return array_column($result->fetch_all(MYSQLI_ASSOC), $column);
    } else {
        return [];
    }
}

function all_table($conn, $table, $search_term = "")
{
    $sql = "SELECT * FROM $table";
    if (!empty($search_term)) {
        $sql .= " WHERE namaProduk LIKE ? OR descProduk LIKE ? OR kategoriProduk LIKE ?";
        $search_term = "%" . $search_term . "%";
    }
    $sql .= " ORDER BY idProduk ASC";
    $stmt = $conn->prepare($sql);
    if (!empty($search_term)) {
        $stmt->bind_param("sss", $search_term, $search_term, $search_term);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result && $result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

function get_products_by_shopname($conn, $shop_name)
{
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

function get_cart_details($conn, $userId)
{
    $sql = "
            SELECT user.*, produk.*, cart.*
            FROM cart
            JOIN user ON cart.idUser = user.idUser
            JOIN produk ON cart.idProduk = produk.idProduk
            WHERE cart.iduser = ?
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

function get_user_details($conn, $userId, $columns = "*")
{
    if ($columns !== "*") {
        $allowed_columns = ['username', 'email', 'phoneNumber', 'idUser', 'idRole', 'namaToko', 'password']; // Add all column names here
        $columns_array = explode(",", $columns);
        $filtered_columns = array_intersect($allowed_columns, array_map('trim', $columns_array));
        $columns = implode(",", $filtered_columns);
    }
    $sql = "SELECT $columns FROM user WHERE idUser = ?";
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
function get_product_details($conn, $productId)
{
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