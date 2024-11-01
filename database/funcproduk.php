<?php
include "database.php";
include "connect.php";
session_start();

if (isset($_POST['condition'])) {
    $condition = $_POST['condition'];

    switch ($condition) {
        case "insert":
            $nama = $_POST["namaproduk"];
            $kategoriProduk = $_POST["kategoriProduk"];
            $namapenjual = $_POST["namapenjual"];
            $desc = $_POST["descproduk"];
            $harga = $_POST["hargaproduk"];
            $qty = $_POST["qtyproduk"];
            $maxidx = mysqli_query($conn, "SELECT * FROM produk ORDER BY idProduk DESC");
            $row = mysqli_fetch_array($maxidx);
            if (mysqli_num_rows($maxidx) != NULL) {
                $idProduk = $row[0] + 1;
            } else {
                $idProduk = 1;
            }
            $uploadDir = '../assets/upload/';
            $allowedTypes = ['gif', 'jpg', 'jpeg', 'png'];
            $foto = "Produk_" . $idProduk . "." . pathinfo($_FILES["fotoproduk"]["name"], PATHINFO_EXTENSION);
            $targetFile = $uploadDir . $foto;
            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            if (!in_array($fileType, $allowedTypes)) {
                die("File type not allowed.");
            }
            if ($_FILES["fotoproduk"]["size"] > 4096 * 1024) {
                die("File is too large. Maximum size is 4MB.");
            }
            if (move_uploaded_file($_FILES["fotoproduk"]["tmp_name"], $targetFile)) {
                $query = "INSERT INTO produk (idProduk, namaProduk, kategoriProduk, namaPenjual, descProduk, hargaProduk, fotoProduk, quantity) 
                            VALUES ('$idProduk', '$nama', '$kategoriProduk', '$namapenjual', '$desc', '$harga', '$foto', '$qty')";
                mysqli_query($conn, $query);
                header("location: ../seller.php");
            } else {
                header("location: ../register.php");
            }
            break;
        case "delete":
            $idProduk = $_POST["idProdukValue"];
            $namaGambarProduk = $_POST["namaGambarProduk"];
            $sql = "DELETE FROM produk WHERE idProduk = ?";
            $stmt = $conn->prepare($sql);
            if ($stmt) {
                $stmt->bind_param("i", $idProduk, );
                if (!$stmt->execute()) {
                    echo "Error executing statement: (" . $stmt->errno . ") " . $stmt->error;
                } else {
                    $imagePath = "../assets/upload/" . $namaGambarProduk;
                    if (file_exists($imagePath)) {
                        if (!unlink($imagePath)) {
                            echo "Error deleting image file.";
                        }
                    } else {
                        echo "Image file does not exist.";
                    }
                    header("Location: ../seller.php");
                    exit();
                }
            } else {
                echo "Error preparing statement: (" . $conn->errno . ") " . $conn->error;
            }
            $stmt->close();
            break;
        case "update":
            $idProdukUpdate = $_POST["idProdukUpdate"];
            $namaProdukUpdate = $_POST["namaProdukUpdate"];
            $deskripsiProdukUpdate = $_POST["deskripsiProdukUpdate"];
            $hargaProdukUpdate = $_POST["hargaProdukUpdate"];
            $quantityProdukUpdate = $_POST["quantityProdukUpdate"];
            $sql = "UPDATE produk SET namaProduk = ?, descProduk = ?, hargaProduk = ?, quantity = ? WHERE idProduk = ?";
            $stmt = $conn->prepare($sql);
            if ($stmt) {
                $stmt->bind_param("ssssi", $namaProdukUpdate, $deskripsiProdukUpdate, $hargaProdukUpdate, $quantityProdukUpdate, $idProdukUpdate);
                if (!$stmt->execute()) {
                    echo "Error executing statement: (" . $stmt->errno . ") " . $stmt->error;
                } else {
                    header("Location: ../seller.php");
                    exit();
                }
            } else {
                echo "Error preparing statement: (" . $conn->errno . ") " . $conn->error;
            }
            $stmt->close();
            break;
        case "addToCart":
            if (!isset($_SESSION["userId"])) {
                header("Location: ../login.php");
                exit();
            } else {
                $userId = $_SESSION["userId"];
                $productId = $_POST["idProdukValue"];
                $amount = $_POST["amount"];
                $sqlcheck = "SELECT * FROM cart WHERE idUser = '$userId' AND idProduk = '$productId'";
                $result = mysqli_query($conn, $sqlcheck);
                if (mysqli_num_rows($result) > 0) {
                    $sql = "UPDATE cart SET amount = amount + 1 WHERE idUser = '$userId' AND idProduk = '$productId'";
                    mysqli_query($conn, $sql);
                    header("location: ../cart.php");
                } else {
                    $sql = "INSERT INTO cart (idUser, idProduk, amount, dateAdded) VALUES ($userId, $productId, $amount, NOW())";
                    mysqli_query($conn, $sql);
                    header("location: ../cart.php");
                }
            }
            break;
    }
}
?>