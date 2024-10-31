<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sign in to your very own ShopEasily™ account.">
    <title>Sign in to your ShopEasily™ account</title>
    <link rel="stylesheet" type="text/css" href="assets/css/login.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/favicons/site.webmanifest">
    <link href='https://unpkg.com/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://db.onlinewebfonts.com/c/48656eabd3fef6464367d956315c749a?family=Electronic+Arts+Text" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/cb2c6807809e3f956c87a1773338186e?family=Electronic+Arts+Text+Bold" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/e770a9e3ae1a8be2089472bc6391f697?family=Electronic+Arts+Display" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        require_once 'vendor/autoload.php';

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
    ?>
    <nav class="top-bar">
        <a href="index.php" title="ShopEasily" target="_self">
            <img src="assets/branding/shopeasily-logo-big.png" alt="shopeasily-logo" class="logo">
            <img src="assets/branding/shopeasily-name.png" alt="shopeasily-brand" class="brand">
        </a>
        <button class="help">Butuh bantuan?</button>
    </nav>
    <div class="web-body">
        <div class="login-box">
            <h2>MASUK</h2>
            <hr style="width: 100%;size: 0.5; color: #e1d7c6" noshade>
            <form action="database/process.php" class="login" method="POST">
                <input type="hidden" class="condition" id="account_username" name="condition" value="login" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <input type="text" class="username" id="account_username" name="name" placeholder="Nama Pengguna" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <input type="password" class="password" id="account_password" name="pass" placeholder="Kata Sandi" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <button type="submit" class="submit-btn">Masuk</button>
            </form>
            <a href="#"><p>Lupa Password</p></a>
            <p class="another-method-title">atau masuk dengan</p>
            <div class="another-method">
                <a href="<?php echo $client->createAuthUrl(); ?>" class="google" style="display: flex; flex-direction: row; align-items: center">
                    <img src="assets/google-logo-removebg-preview.png" alt="" width="20" style="padding-right: 5px;">Google
                </a>
            </div>
            <p class="daftar">Belum punya akun? <a href="register.php">Daftar</a></p>
        </div>
        <div class="footer">
            <h4>Copyright @ Kelompok 1 2024</h4>
        </div>
    </div>
</body>
</html>