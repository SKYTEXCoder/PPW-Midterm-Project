<?php

include "database/database.php";
include "database/connect.php";
session_start();
if (isset($_GET['$idProdukValue'])) {
    $idProdukValue = $_GET['$idProdukValue'];
}
if (isset($_SESSION['userId'])) {
    $userId = $_SESSION['userId'];
    $userDetails = get_user_details($conn, $userId);
} else {

}
$productDetails = get_product_details($conn, $idProdukValue);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ShopEasily™ - Product Details">
    <title>ShopEasily™ - Product Details</title>
    <link rel="stylesheet" type="text/css" href="assets/css/product_details.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/favicons/site.webmanifest">
    <link href='https://unpkg.com/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://db.onlinewebfonts.com/c/48656eabd3fef6464367d956315c749a?family=Electronic+Arts+Text"
        rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/cb2c6807809e3f956c87a1773338186e?family=Electronic+Arts+Text+Bold"
        rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/e770a9e3ae1a8be2089472bc6391f697?family=Electronic+Arts+Display"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header class="header" id="header">
        <a href="index.php" class="logo">
            <img src="assets/branding/shopeasily-logo-big.png" alt="shopeasily-logo" class="shopeasily-logo">
            <img src="assets/branding/shopeasily-name-big.png" alt="shopeasily-brand" class="shopeasily-brand">
        </a>
        <ul class="navmenu">
            <li class="homeNavButton">
                <a href="index.php">
                    Beranda
                </a>
            </li>
            <!--<li>
                <a href="#">
                    Shop
                </a>
            </li>-->
            <li class="catalogNavButton">
                <a href="catalog.php">
                    Katalog
                </a>
            </li>
            <!--<li>
                <a href="#">
                    Page
                </a>
            </li>-->
            <li class="sellerpageNavButton">
                <a href="<?php if (!isset($_SESSION['userId'])) {
                    echo "login.php";
                } else {
                    echo "seller.php";
                } ?>">
                    Penjual
                </a>
            </li>
            <div class="active-tab-indicator-line">

            </div>
        </ul>
        <div class="nav-icon">
            <div class="box">
                <form action="search_results.php" class="search-for-products" method="POST">
                    <input type="text" class="products-search-input" name="products-search-input"
                        placeholder="Cari Produk di ShopEasily™....." autocorrect="off" autocapitalize="off"
                        autocomplete="off" required>
                    <button type="submit" class="search-icon-container-submit">
                        <i class="bx bx-search">

                        </i>
                    </button>
                </form>
            </div>
            <a href="<?php if (!isset($_SESSION['userId'])) {
                echo "login.php";
            } else {
                echo "cart.php";
            } ?>" class="cartNavigation">
                <i class="bx bx-cart">

                </i>
            </a>
            <?php if (!isset($_SESSION['userId'])) { ?>
                <a href="login.php" class="loginNavigation">
                    <p class="loginNavigation">Login</p>
                </a>
                <a href="register.php" class="registerNavigation">
                    <p class="registerNavigation">Register</p>
                </a>
            <?php } else { ?>
                <a href="profile.php" class="profileNavigation">
                    <i class="bx bx-user">

                    </i>
                </a>
                <a href="logout.php" class="logoutNavigation">
                    <i class="bx bx-log-out">

                    </i>
                </a><?php } ?>
        </div>
    </header>
    <section class="product">
        <div class="navigation">
            <p><a href="#">Home</a> > Iphone 11</p>
        </div>
        <div class="product-box">
            <div class="wrapper">
                <div class="product-image">
                    <img src="assets/branding/iphone_11.jpg" alt="" />
                    <div class="another-pov">
                        <img src="assets/branding/varian.png" alt="" />
                        <img src="assets/branding/depan.png" alt="" />
                        <img src="assets/branding/ads.png" alt="" />
                    </div>
                </div>
                <div class="shop-name">
                    <img src="assets/branding/shop.png" alt="" />
                    <div class="shop-desc">
                        <h4>Toko Orafon</h4>
                        <p>Toko menjual <br />barang elektronik</p>
                    </div>
                </div>
            </div>
            <div class="wrap">
                <div class="desc">
                    <h2>Iphone 11</h2>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi
                        sit dicta sed repudiandae. Tempore culpa omnis hic nemo nobis
                        aperiam, eius ipsam, ad, ex placeat accusamus autem maiores
                        incidunt. Blanditiis. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Facilis necessitatibus voluptate sunt ex illo
                        odit fuga ratione, hic, nemo assumenda nisi est aliquam placeat
                        cum eligendi voluptatum consequuntur maiores tenetur? Lorem ipsum
                        dolor sit amet consectetur, adipisicing elit. Quasi, sequi id
                        asperiores natus nesciunt vero nihil pariatur porro, tempore ipsam
                        magni esse tenetur perspiciatis ea impedit ut enim quibusdam
                        ipsum?
                    </p>
                </div>
                <div class="btn">
                    <div class="counter">
                        <span class="minus">-</span>
                        <span class="num">1</span>
                        <span class="plus">+</span>
                    </div>
                    <button class="add-cart">Tambah Keranjang</button>
                </div>
            </div>
        </div>
        <div class="another-products">
            <h2>Produk lainnya :</h2>
            <div class="list-product">
                <div class="product1">
                    <img src="assets/branding/anker_soundcore_p20i_tws.jpg" alt="" />
                    <div class="short-desc">
                        <p class="head-sd">TWS Anker Sound core</p>
                        <p>Rp 200.000</p>
                    </div>
                </div>
                <div class="product2">
                    <img src="assets/branding/blackshark_v2x_headset.jpg" alt="" />
                    <div class="short-desc">
                        <p class="head-sd">Headset Black Shark</p>
                        <p>Rp 700.000</p>
                    </div>
                </div>
                <div class="product3">
                    <img src="assets/branding/kensington_blackbelt_rugged_case.jpg" alt="" />
                    <div class="short-desc">
                        <p class="head-sd">Black belt rugged case</p>
                        <p>Rp 50.000</p>
                    </div>
                </div>
                <div class="product1">
                    <img src="assets/branding/anker_soundcore_p20i_tws.jpg" alt="" />
                    <div class="short-desc">
                        <p class="head-sd">TWS Anker Sound core</p>
                        <p>Rp 200.000</p>
                    </div>
                </div>
                <div class="product2">
                    <img src="assets/branding/blackshark_v2x_headset.jpg" alt="" />
                    <div class="short-desc">
                        <p class="head-sd">Headset Black Shark</p>
                        <p>Rp 700.000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                    <p>Dapatkan update terkini, berbagai promo, dan diskon menarik yang dikirim langsung ke email kamu.
                    </p>
                    <p>Lorem Ipsum Dolor Sit Amet Consectetur Adispicing Elit. Eum, Debitis</p>
                    <p>Dapatkan update terkini, berbagai promo, dan diskon menarik yang dikirim langsung ke email kamu.
                    </p>
                </div>
            </div>
        </section>
        <div class="end-text">
            <p>Copyright © Kelompok 1 PPW @2024. All Rights Reserved. Dibuat Oleh Kelompok 1.</p>
        </div>
    </footer>
</body>

</html>