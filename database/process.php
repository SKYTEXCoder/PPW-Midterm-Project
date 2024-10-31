<?php
    include "database.php";
    include "connect.php";
    require_once '../vendor/autoload.php';
    session_start();

    // init configuration
    $clientID = '993792713349-vd5686tuo4si2dkfrrhvp5i489mc9mp2.apps.googleusercontent.com';
    $clientSecret = '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';
    $redirectUri = 'http://localhost/ppw/punya_danar/database/process.php';
    
    // create Client Request to access Google API
    $client = new Google_Client();
    $client->setClientId($clientID);
    $client->setClientSecret($clientSecret);
    $client->setRedirectUri($redirectUri);
    $client->addScope("email");
    $client->addScope("profile");

    if (isset($_GET['code'])) {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        
        if (array_key_exists('access_token', $token)) {
            $client->setAccessToken($token['access_token']);

            // get profile info
            $google_oauth = new Google_Service_Oauth2($client);
            $google_account_info = $google_oauth->userinfo->get();
            $email =  $google_account_info->email;
            $name =  $google_account_info->name;

            // Save user info to session or database
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;
            $token = $token['access_token'];
            
            $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
            if (mysqli_num_rows($result) == 0){ 
                mysqli_query($conn, "INSERT INTO user (username, email, password) VALUES ('$name', '$email', '$token')");
            } else {
                mysqli_query($conn, "UPDATE user SET password = '$token' WHERE email = '$email'");
            }
            echo '<script>alert("Welcome, ' . $name . '!");</script>';
            header('Location: ../index.php');
            // Redirect or do further processing as needed
        } else {
            echo "Error fetching access token.";
            var_dump($token); // Debugging response
            exit();
        }
    }

    if (isset($_POST['condition'])) {
        $condition = $_POST['condition'];

        switch ($condition){
            case "register":
                $cpass = $_POST['cpass'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $number = $_POST['number'];
                $pass = $_POST['pass'];
                $table = "user";
                $idRole = 1;
                $maxidx = mysqli_query($conn, "SELECT * FROM $table ORDER BY idUser DESC");
                $row = mysqli_fetch_array($maxidx);
                if(mysqli_num_rows($maxidx) != NULL){
                    $idUser = $row[0]+1;
                } else {
                    $idUser = 1;
                }
                if($cpass == $pass){
                    if(str_contains($email, '@gmail.com')){
                        $_SESSION['acc'] = 1;
                        $sql = "INSERT INTO $table (idUser, idRole, username, email, phoneNumber, password) VALUES ('$idUser', '$idRole', '$name', '$email', '$number', '$pass')";
                        if (mysqli_query($conn, $sql)) {
                            header('Location: ../login.php');
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                            die;
                        }
                    } else {
                        header('Location: ../register.php');
                    }
                } else {
                    header('Location: ../register.php');
                }
                break;
            case "login":
                $name = $_POST['name'];
                $pass = $_POST['pass'];
                $sql = "SELECT * FROM user WHERE username = '$name'";
                $res = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($res);
                
                if($row != NULL){
                    $nama = $row['username'];
                    $password = $row['password'];
                    $userId = $row['idUser'];

                    if($name == $nama && $pass == $password){
                        $_SESSION['name'] = $name;
                        $_SESSION['userId'] = $userId;
                        header('Location: ../index.php');
                    } else {
                        header('Location: ../login.php');
                    }
                } else {
                    header('Location: ../login.php');
                }
                break;
            case "logout":
                session_destroy();
                header('Location: ../login.php');
                break;
            case 'aktivasi':
                $userId = $_POST['userId'];
                $password = $_POST['password'];
                $store_name = $_POST['store_name'];
                $userDetails = get_user_details($conn, $userId);
                if ($password != $userDetails['password']) {
                    header('Location: aktivasiFiturPenjual.php');
                    exit();
                } else {
                    $sql = "UPDATE user SET namaToko = ?, idRole = 1 WHERE idUser = ?";
                    $stmt = $conn->prepare($sql);
                
                    if ($stmt) {
                        $stmt->bind_param("si", $store_name, $userId);
                        if (!$stmt->execute()) {
                            echo "Error executing statement: (" . $stmt->errno . ") " . $stmt->error;
                        }
                        else {
                            header("Location: seller.php");
                        }
                    } else {
                        echo "Error preparing statement: (" . $conn->errno . ") " . $conn->error;
                    }
                }
                
        }
    }
?>