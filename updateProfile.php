<?php
session_start();
if (!isset($_SESSION["userId"])) {
    header("Location: login.php");
    exit();
} else {
    include "database/database.php";
    include "database/connect.php";
    $userId = $_SESSION["userId"];
    $userData = get_user_details($conn, $userId, "namaToko, username, email, phoneNumber, password");
    if (isset($_POST["condition"]) && $_POST["condition"] === "updateProfileSamePage") {
        $updatedUserName = $_POST["updatedUserName"];
        $updatedShopName = $_POST["updatedShopName"];
        $updatedPhoneNumber = $_POST["updatedPhoneNumber"];
        $updatedEmailAddress = $_POST["updatedEmailAddress"];
        $updatedAccountPassword = $_POST["updatedAccountPassword"];
        $sql = "UPDATE user SET username = ?, namaToko = ?, phoneNumber = ?, email = ?, password = ? WHERE idUser = ?";
        $stmt = $conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("sssssi", $updatedUserName, $updatedShopName, $updatedPhoneNumber, $updatedEmailAddress, $updatedAccountPassword, $userId);
            if (!$stmt->execute()) {
                echo "Error executing statement (" . $stmt->errno . ") " . $stmt->error;
            } else {
                header("Location: profile.php");
            }
        } else {
            echo "Error preparing statement: (" . $conn->errno . ") " . $conn->error;
        }
        $stmt->close();
    } else {

    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ShopEasily™ - Manage Your Profile">
    <title>ShopEasily™ - Update Your Profile's Details</title>
    <link rel="stylesheet" type="text/css" href="assets/css/updateProfile.css" />
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
        <a href="#" class="needhelp">
            Butuh Bantuan?
        </a>
    </header>
    <main class="main-content">
        <section class="activation-form-section">
            <h2>Update Detail/Kredensial Profil dari<br>Akun ShopEasily™-mu</h2>
            <p>Currently logged in as <strong><?php echo $userData["username"] ?></strong> with User ID of
                <strong><?php echo $userId ?></strong>.
            </p>
            <form action="updateProfile.php" method="POST" class="activation-form" enctype="multipart/form-data">
                <input type="hidden" class="condition" id="condition" name="condition" value="updateProfileSamePage"
                    autocorrect="off" autocapitalize="off" autocomplete="off" required>
                <label for="updatedUserName">Nama Pengguna</label>
                <input type="text" class="updatedUserName" id="updatedUserName" name="updatedUserName" autocorrect="off"
                    autocapitalize="off" autocomplete="off" required value="<?php echo $userData["username"] ?>">
                <label for="updatedShopName">Nama Toko</label>
                <input type="text" class="updatedShopName" id="updatedShopName" name="updatedShopName" autocorrect="off"
                    autocapitalize="off" autocomplete="off" required value="<?php echo $userData["namaToko"] ?>">
                <label for="updatedPhoneNumber">Nomor HP</label>
                <input type="text" class="updatedPhoneNumber" id="updatedPhoneNumber" name="updatedPhoneNumber"
                    autocorrect="off" autocapitalize="off" autocomplete="off" required
                    value="<?php echo $userData["phoneNumber"] ?>">
                <label for="updatedEmailAddress">Alamat Email</label>
                <input type="text" class="updatedEmailAddress" id="updatedEmailAddress" name="updatedEmailAddress"
                    autocorrect="off" autocapitalize="off" autocomplete="off" required
                    value="<?php echo $userData["email"] ?>">
                <label for="updatedAccountPassword">Kata Sandi Akun</label>
                <input type="text" class="updatedAccountPassword" id="updatedAccountPassword" name="updatedAccountPassword"
                    autocorrect="off" autocapitalize="off" autocomplete="off" required
                    value="<?php echo $userData["password"] ?>">
                <button type="submit" class="submit-button">Update Detail/Kredensial Profil</button>
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