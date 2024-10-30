<?php
    session_start();
    include "database/database.php";
    include "database/connect.php";
    $name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sign in to your very own ShopEasily™ account.">
    <title>Insert Produk</title>
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
    <nav class="top-bar">
        <a href="index.php" title="ShopEasily" target="_self">
            <img src="assets/branding/shopeasily-logo-big.png" alt="shopeasily-logo" class="logo">
            <img src="assets/branding/shopeasily-name.png" alt="shopeasily-brand" class="brand">
        </a>
        <button class="help">Butuh bantuan?</button>
    </nav>
    <div class="web-body">
        <div class="login-box">
            <h2>Insert Produk</h2>
            <hr style="width: 100%;size: 0.5; color: #e1d7c6" noshade>
            <form action="database/funcproduk.php" method="post" class="login" enctype="multipart/form-data">
                <input type="hidden" class="namapenjual" name="namapenjual" value="<?php echo $name?>" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <input type="hidden" class="condition" name="condition" value="insert" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <input type="text" class="username" name="namaproduk" placeholder="Nama Produk" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <input type="text" class="username" name="descproduk" placeholder="Deskripsi Produk" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <input type="number" class="username" name="hargaproduk" placeholder="Harga Produk" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <input type="number" class="username" name="qtyproduk" placeholder="Qty Produk" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <input type="file" class="username" name="fotoproduk" placeholder="Foto Produk" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <button type="submit" class="submit-btn">Insert</button>
            </form>
        </div>
        <div class="footer">
            <h4>Copyright @ Kelompok 1 2024</h4>
        </div>
    </div>
</body>
</html>