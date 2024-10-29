<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to ShopEasily™!">
    <title>ShopEasily™ - Home Page</title>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css" />
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
        <a href="#" class="logo">
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
                <a href="seller.php">
                    Penjual
                </a>
            </li>
            <div class="active-tab-indicator-line">
                
            </div>
        </ul>
        <div class="nav-icon">
            <a href="#">
                <i class="bx bx-search">

                </i>
            </a>
            <a href="login.php" class="loginNavigation">
                <p class="loginNavigation">Login</p>
            </a>
            <a href="register.php" class="registerNavigation">
                <p class="registerNavigation">Register</p>
            </a>
            <!--<a href="#">
                <i class="bx bx-user">

                </i>
            </a>
            <a href="#">
                <i class="bx bx-cart">

                </i>
            </a>-->
        </div>
    </header>

    <section class="main-home">
        <div class="main-text">
            <h5>Winter Collection 2024</h5>
            <h1>New Winter <br> Collection</h1>
            <p>There's Nothing Like Trendy</p>
            <a href="catalog.php" class="main-btn">Belanja Sekarang <i class="bx bx-right-arrow-alt"></i></a>
        </div>
        <div class="down-arrow">
            <a href="#allproducts" class="down">
                <i class="bx bx-down-arrow-alt">

                </i>
            </a>
        </div>
    </section>

    <section class="all-products" id="allproducts">
        <div class="center-text">
            <h2>Semua <span>Produk</span></h2>
        </div>

        <div class="products">
            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets\images\airpods_pro_2nd_generation.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>Apple Airpods Pro 2nd Generation</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets/images/anker_soundcore_p20i_tws.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>TWS Anker Soundcore P20i</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets/images/autofull_gaming_chair_brown.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>Kursi Gaming Autofull Coklat</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets/images/blackshark_v2x_headset.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>Razer BlackShark V2X Gaming Headset</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets/images/dowinx_gaming_chair_fabric.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>Kursi Gaming Dowinx Kain</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets/images/dumter_3in1.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>DumTer 3-in-1 Toolkit</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets/images/gtracing_gaming_chair.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>Kursi Gaming GTRacing</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets/images/iphone_11.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>Apple iPhone 11</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets/images/iphonexr.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>Apple iPhone XR</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets/images/kensington_blackbelt_rugged_case.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>Kensington Blackbelt Rugged Case</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets/images/keyboardgaming.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>Keyboard Gaming Ambatukam</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets/images/oneplus_10_pro.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>OnePlus 10 Pro</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets/images/oneplus_12R.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>OnePlus 12R</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets/images/redragonm612.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>Mouse Gaming Redragon M612</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets/images/respawn_900_gaming_recliner.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>Respawn 900 Gaming Recliner</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets/images/samsung_galaxy_s24.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>Samsung Galaxy S24</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets/images/tws_jbl_vibe_beam.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>TWS JBL Vibe Beam</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets/images/xiaomi_poco_x6_pro.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>Xiaomi Poco X6 Pro</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets/images/netgear_orbi970_.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>Netgear Orbi 970 Mesh WiFi System</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets/images/samsung_viewfinity_s5_.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>TV Samsung ViewFinity S5</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="product-listing-image-container">
                    <img src="assets/images/samsung_galaxy_a15_.jpg" alt="gambar-produk-1">
                </div>
                <div class="product-text">
                    <h5>For Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class="bx bx-heart">

                    </i>
                </div>
                <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <div class="price">
                    <h4>Samsung Galaxy A15</h4>
                    <p>Rp172.000</p>
                </div>
                <div class="add-to-cart-button-container">
                    <button type="submit" class="add-to-cart-btn">
                        Masukkan Ke Keranjang
                    </button>
                </div>
            </div>
        </div>
    </section>
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
</body>
</html>