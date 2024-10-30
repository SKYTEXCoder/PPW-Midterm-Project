<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dataname = "shopeasily";

    $conn = mysqli_connect($server, $user, $pass, $dataname);

    if(!$conn){
        die("Connection Failed, " . mysqli_connect_error());
    }
?>