<?php
    include "database.php";
    include "connect.php";
    session_start();

    if (isset($_POST['condition'])) {
        $condition = $_POST['condition'];

        switch ($condition){
            case "insert":
                $nama = $_POST["namaproduk"];
                $namapenjual = $_POST["namapenjual"];
                $desc = $_POST["descproduk"];
                $harga = $_POST["hargaproduk"];
                $qty = $_POST["qtyproduk"];
                $maxidx = mysqli_query($conn, "SELECT * FROM produk ORDER BY idProduk DESC");
                $row = mysqli_fetch_array($maxidx);
                if(mysqli_num_rows($maxidx) != NULL){
                    $idProduk = $row[0]+1;
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
                $query = "INSERT INTO produk (idProduk, namaProduk, namaPenjual, descProduk, hargaProduk, fotoProduk, quantity) 
                          VALUES ('$idProduk', '$nama', '$namapenjual', '$desc', '$harga', '$foto', '$qty')";
                mysqli_query($conn, $query);
                header("location: ../insertProduk.php");
            } else {
                header("location: ../register.php");
            }
            break;
        }
    }
?>