<?php
    include "database/database.php";
    include "database/connect.php";
    session_start();
    if (isset($_SESSION['userId'])) {
        $userId = $_SESSION['userId'];
        $userDetails = get_user_details($conn, $userId);
        if (isset($userDetails['idRole'])) {
            if ($userDetails['idRole'] != 0) {
                header("Location: seller.php");
            }
        }
    } else {
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Create your own ShopEasily™ Seller Account">
    <title>ShopEasily™ - Activate Seller Feature</title>
    <link rel="stylesheet" type="text/css" href="assets/css/aktivasiFiturPenjual.css" />
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
    <header class="header" id="header">
        <a href="index.php" class="logo">
            <img src="assets/branding/shopeasily-logo-big.png" alt="shopeasily-logo" class="shopeasily-logo">
            <img src="assets/branding/shopeasily-name-big.png" alt="shopeasily-brand" class="shopeasily-brand">
        </a>
        <a href="#" class="needhelp">
            Butuh Bantuan?
        </a>
    </header>
    <main class="main-content">
        <section class="activation-form-section">
            <h2>Aktifkan Fitur Seller di <br>Akun ShopEasily™-mu</h2>
            <p>Isi formulir berikut ini untuk mengaktifkan akun ShopEasily™ Seller-mu.</p>
            <form action="database/process.php" method="POST" class="activation-form">
                <input type="hidden" class="condition" id="account_username" name="condition" value="aktivasi" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <input type="hidden" class="userId" id="userId" name="userId" value="<?php echo $userId; ?>" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <label for="store_name">Nama Toko</label>
                <input type="text" id="store_name" name="store_name" autocorrect="off" autocapitalize="off" autocomplete="off" required placeholder="Masukkan Nama Toko Anda">
                <label for="password">Password Akun</label>
                <input type="password" id="password" name="password" autocorrect="off" autocapitalize="off" autocomplete="off" required placeholder="Masukkan Password Anda">
                <button type="submit" class="submit-button">Aktifkan Fitur Seller</button>
            </form>
        </section>
    </main>
    <footer>
        <section class="contact">
            <div class="contact-info">
                <div class="first-info">
                    <img src="assets/branding/shopeasily-name.png" alt="logo-nama">
                    <p>3245 Grant Street Longview, <br> TX United Kingdom 765378</p>
                    <p>021693483404</p>
                    <p>kelompok1ppw@gmail.com</p>
                    <div class="social-icon">
                        <a href="https://www.facebook.com" target="_blank"><i class="bx bxl-facebook"></i></a>
                        <a href="https://x.com/home" target="_blank"><i class="bx bxl-twitter"></i></a>
                        <a href="https://www.instagram.com/" target="_blank"><i class="bx bxl-instagram"></i></a>
                        <a href="https://www.youtube.com/" target="_blank"><i class="bx bxl-youtube"></i></a>
                        <a href="https://www.linkedin.com/" target="_blank"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

                <div class="second-info">
                    <h4>Support</h4>
                    <p>Hubungi Kami</p>
                    <p>About Us</p>
                    <p>Size Guide</p>
                    <p>Shopping & Returns</p>
                    <p>Privacy</p>
                </div>

                <div class="third-info">
                    <h4>Shop</h4>
                    <p>Peripherals Gaming</p>
                    <p>Gadget Terkini</p>
                    <p>Pakaian Pria</p>
                    <p>Pakaian Wanita</p>
                    <p>Pakaian Anak-Anak</p>
                </div>
                <div class="fourth-info">
                    <h4>Perusahaan</h4>
                    <p>Tentang Kami</p>
                    <p>Blog</p>
                    <p>Mitra</p>
                    <p>Kerjasama</p>
                </div>
                <div class="fifth-info">
                    <h4>Subscribe to our newsletter</h4>
                    <p>Dapatkan update terkini, berbagai promo, dan diskon menarik yang dikirim langsung ke email kamu.</p>
                    <p>Lorem Ipsum Dolor Sit Amet Consectetur Adispicing Elit. Eum, Debitis</p>
                    <p>Dapatkan update terkini, berbagai promo, dan diskon menarik yang dikirim langsung ke email kamu.</p>
                </div>
            </div>
        </section>
        <div class="end-text">
            <p>Copyright © Kelompok 1 PPW @2024. All Rights Reserved. Dibuat Oleh Kelompok 1.</p>
        </div>
    </footer>









<!--<nav class="top-bar">
        <a href="index.php" title="ShopEasily" target="_self">
            <img src="assets/branding/shopeasily-logo-big.png" alt="shopeasily-logo" class="logo">
            <img src="assets/branding/shopeasily-name.png" alt="shopeasily-brand" class="brand">
        </a>
        <button class="help">Butuh bantuan?</button>
    </nav>
    <div class="web-body">
        <div class="login-box">
            <h2>Aktivasi Penjual</h2>
            <hr style="width: 100%;size: 0.5; color: #e1d7c6" noshade>
            <form action="process.php" class="login" method="POST">
                <input type="hidden" class="condition" id="account_username" name="condition" value="aktivasi" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <input type="hidden" class="username" id="account_username" name="name" value="<?php echo $name; ?>" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <input type="text" class="toko" id="account_username" name="toko" placeholder="Nama Toko" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <input type="password" class="password" id="account_password" name="pass" placeholder="Kata Sandi" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <button type="submit" class="submit-btn">Bergabung</button>
            </form>
            <a href="#"><p>Lupa Password</p></a>
        </div>
        <div class="footer">
            <h4>Copyright @ Kelompok 1 2024</h4>
        </div>
    </div>-->
</body>
</html>