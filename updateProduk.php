<?php 
    include "database/database.php";
    include "database/connect.php";
    session_start();
    $idProdukValue = $_POST["idProdukValue"];
    $namaGambarProduk = $_POST["namaGambarProduk"];
    $namaProduk = $_POST["namaProduk"];
    $deskripsiProdukCurrent = $_POST["deskripsiProdukCurrent"];
    $hargaProdukCurrent = $_POST["hargaProdukCurrent"];
    $quantityProdukCurrent = $_POST["quantityProdukCurrent"];
    $userId = $_SESSION['userId'];
    $userDetails = get_user_details($conn, $userId);
    $shop_name = $userDetails["namaToko"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Update Your Product's Details">
    <title>ShopEasily™ - Update Your Product's Details</title>
    <link rel="stylesheet" type="text/css" href="assets/css/updateProduk.css" />
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
            <h2>Update Detail Produk Untuk Produk <br>"<?php echo $namaProduk?>"</h2>
            <!--<p>Isi formulir berikut ini untuk mengaktifkan akun ShopEasily™ Seller-mu.</p>-->
            <form action="database/funcproduk.php" method="POST" class="activation-form" enctype="multipart/form-data">
                <input type="hidden" class="condition" id="condition" name="condition" value="update" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <input type="hidden" class="idProdukUpdate" id="idProdukUpdate" name="idProdukUpdate" value="<?php echo $idProdukValue; ?>" autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <label for="namaProdukUpdate">Nama Produk</label>
                <input type="text" id="namaProdukUpdate" name="namaProdukUpdate" autocorrect="off" autocapitalize="off" autocomplete="off" required value="<?php echo $namaProduk ?>">
                <label for="deskripsiProdukUpdate">Deskripsi Produk</label>
                <input type="text" id="deskripsiProdukUpdate" name="deskripsiProdukUpdate" autocorrect="off" autocapitalize="off" autocomplete="off" required value="<?php echo $deskripsiProdukCurrent ?>">
                <label for="hargaProdukUpdate">Harga Produk</label>
                <input type="text" id="hargaProdukUpdate" name="hargaProdukUpdate" autocorrect="off" autocapitalize="off" autocomplete="off" required value="<?php echo $hargaProdukCurrent ?>">
                <label for="quantityProdukUpdate">Kuantitas Produk</label>
                <input type="text" id="quantityProdukUpdate" name="quantityProdukUpdate" autocorrect="off" autocapitalize="off" autocomplete="off" required value="<?php echo $quantityProdukCurrent ?>">

                <button type="submit" class="submit-button">Update Detail Produk</button>
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
</body>
</html>