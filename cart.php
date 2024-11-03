<?php
include "database/database.php";
include "database/connect.php";
session_start();
if (isset($_SESSION['userId'])) {
    $userId = $_SESSION['userId'];
    $userDetails = get_user_details($conn, $userId);
} else {
    header("Location: login.php");
}
$totalbarang = 0;
$totalharga = 0;
$data = get_cart_details($conn, $userId);
$jumlahcart = count($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ShopEasily™ - Shopping Cart">
    <title>ShopEasily™ - Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="assets/css/cart.css" />
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
                    <input class="products-search-input" name="products-search-input"
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
                </a>
            <?php } ?>
        </div>
    </header>
    <main id="main-site">
        <section id="cart" class="cart-section">
            <div class="container">
                <h5 class="section-title">Keranjang Belanja</h5>
                <div class="cart-items">
                    <?php foreach ($data as $row) { ?>
                        <div class="cart-item">
                            <a href="<?php echo 'product_details.php?idProdukValue=' . $row['idProduk']; ?>">
                                <div class="item-image">
                                    <img src="assets/upload/<?php echo $row['fotoProduk'] ?>" alt="cart1">
                                </div>
                            </a>
                            <div class="item-details">
                                <a class="item-details-product-link"
                                    href="<?php echo 'product_details.php?idProdukValue=' . $row['idProduk']; ?>">
                                    <h5><?php echo $row["namaProduk"] ?></h5>
                                    <small>by <span><?php echo $row["namaPenjual"] ?></span></small>
                                    <div class="rating">
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star-half"></i>
                                        <span class="rating-number">4.9</span>
                                        <span class="divider">|</span>
                                        <a href="product_details.php">20,534 ratings</a>
                                    </div>
                                </a>
                                <div class="quantity">
                                    <form action="database/funcproduk.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" class="condition" name="condition" value="addToCart"
                                            autocorrect="off" autocapitalize="off" autocomplete="off" required>
                                        <input type="hidden" class="idProdukValue" name="idProdukValue"
                                            value="<?php echo $row["idProduk"] ?>" autocorrect="off" autocapitalize="off"
                                            autocomplete="off" required>
                                        <input type="hidden" class="amount" name="amount" value="1" autocorrect="off"
                                            autocapitalize="off" autocomplete="off" required>
                                        <button class="qty-up" type="submit"><i class='bx bx-plus'></i></button>
                                    </form>
                                    <form action="database/funcproduk.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" class="condition" name="condition" value="setToCart"
                                            autocorrect="off" autocapitalize="off" autocomplete="off" required>
                                        <input type="hidden" class="idProdukValue" name="idProdukValue"
                                            value="<?php echo $row["idProduk"] ?>" autocorrect="off" autocapitalize="off"
                                            autocomplete="off" required>
                                        <input type="number" class="qty-input" name="amount"
                                            value="<?php echo $row["amount"] ?>" autocorrect="off" autocapitalize="off"
                                            autocomplete="off" required>
                                        <button class="update-produk-amount-incart" type="submit">Update</button>
                                    </form>
                                    <form action="database/funcproduk.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" class="condition" name="condition" value="reduceFromCart"
                                            autocorrect="off" autocapitalize="off" autocomplete="off" required>
                                        <input type="hidden" class="idProdukValue" name="idProdukValue"
                                            value="<?php echo $row["idProduk"] ?>" autocorrect="off" autocapitalize="off"
                                            autocomplete="off" required>
                                        <button class="qty-down" type="submit"><i class='bx bx-minus'></i></button>
                                    </form>
                                    <form action="database/funcproduk.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" class="condition" name="condition" value="deleteFromCart"
                                            autocorrect="off" autocapitalize="off" autocomplete="off" required>
                                        <input type="hidden" class="idProdukValue" name="idProdukValue"
                                            value="<?php echo $row["idProduk"] ?>" autocorrect="off" autocapitalize="off"
                                            autocomplete="off" required>
                                        <button class="delete" type="submit"><i class='bx bxs-trash'></i></button>
                                    </form>
                                    <form action="database/funcproduk.php" method="post" enctype="multipart/form-data">
                                        <button class="save"><i class='bx bx-heart'></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="item-price">
                                <span class="price-per-product-incart">HARGA: Rp<?php echo number_format($row["hargaProduk"], 2, ',', '.'); ?></span>
                                <span class="price-total-product-incart">TOTAL: Rp<?php echo number_format($row['amount'] * $row['hargaProduk'], 2, ',', '.'); ?></span>
                                <span class="product-amount-incart">JUMLAH: <?php echo $row["amount"] ?> di keranjang</span>
                            </div>
                        </div>
                        <?php $totalbarang += $row['amount']; ?>
                        <?php $totalharga += $row['amount'] * $row['hargaProduk']; ?>
                    <?php } ?>
                    <div class="subtotal">
                        <?php if ($jumlahcart !== 0) { ?>
                            <h6>Orderan kamu READY untuk dicheckout!</h6>
                            <div class="subtotal-details">
                                <h5>Total Harga (<?php echo $jumlahcart ?> produk, <?php echo $totalbarang ?> barang):
                                    <span>Rp<?php echo number_format($totalharga, 2, ',', '.') ?></span>
                                </h5>
                                <button class="buy-btn">Check Out</button>
                            </div>
                        <?php } else { ?>
                            <h6>Keranjang Belanja Kamu Masih Kosong.</h6>
                            <div class="subtotal-details">
                                <h5>Silakan masukkan berbagai produk yang terdapat di katalog ShopEasily <br>ke dalam
                                    keranjang kamu terlebih dahulu.</h5>
                                <a href="catalog.php">
                                    <button class="buy-btn catalog-redirect">Belanja Sekarang</button>
                                </a>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer" id="footer">
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