<?php
    session_start();
    require 'koneksi.php';

    $username_ = $_GET['username'];

    $hasil = mysqli_query($conn, "SELECT * FROM user WHERE username='$username_'");

    while ($row = mysqli_fetch_assoc($hasil)) {
        $user[] = $row;
    }

    $username = $user[0];

    $result = mysqli_query($conn, "SELECT * FROM buy WHERE nama='$username_' ORDER BY id DESC");

    $barang = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $barang[] = $row;
    }
    $produk = $barang[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleganz Watch</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <!-- Link BoxIcon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <script src="main.js"></script>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <button id="pencet" onclick="openNav()" style="display: none;">Try it</button>
            <label for="pencet">
                <a class="nav__menu">
                    <i class='bx bx-menu' ></i>
                </a>
            </label>

            <a href="#" class="nav__logo">
                <i class='bx bxs-watch'></i> Eleganz<span>Watch</span>
            </a>

            <div class="wrap">
                <div class="search">
                   <input type="text" class="searchTerm" placeholder="Search..">
                   <button type="submit" class="searchButton"><i class='bx bx-search'></i></button>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== Menu ====================-->
    <section >
        <div id="myNav" class="overlay">
            <div class="topoverlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class='bx bx-x' ></i></a>
                <a href="#" class="nav__logo1">
                    <i class='bx bxs-user' ></i>Admin
                </a>
            </div>
            <div class="overlay-content">
                <a href="index.php?username=<?php echo $username['username']; ?>">Home</a>
                <a href="addreq.php?username=<?php echo $username['username']; ?>">Request Product</a>
                <a href="#men">Men Watch</a>
                <a href="#women">Women Watch</a>
                <a href="#">About Us</a>
            </div>
            <div class="logout">
                <a href="logout.php"><i class='bx bx-log-out' ></i>Logout</a>
            </div>
          </div>
    </section>

    <section class="kotak">
        <tr> Payment Receipt <br> </tr>
        <tr>
            <td>barang Image</td>
            <td> : </td>
            <td><img style="height:90px; width:80px;" src="gambar/produk/<?=$produk['barang']?>"> <br> </td>
        </tr>
        <tr>
            <td>barang Name</td>
            <td> : </td>
            <td><?php echo $produk['nama_barang']; ?> <br> </td>
        </tr>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><?php echo $produk['nama']; ?> <br> </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $produk['email']; ?> <br> </td>
        </tr>
        <tr>
            <td>Address</td>
            <td>:</td>
            <td><?php echo $produk['alamat']; ?> <br> </td>
        </tr>
        <tr>
            <td>Many Purchases</td>
            <td>:</td>
            <td><?php echo $produk['jumlah']; ?> <br> </td>
        </tr>
        <tr>
            <td>Total Price</td>
            <td> : </td>
            <td> $ <?php $total=$produk['harga'] * $produk['jumlah']; echo $total; ?> <br> </td>
        </tr>
        <tr>
            <td>Payment Method</td>
            <td>:</td>
            <td><?php echo $produk['metode']; ?> <br> </td>
        </tr>
        <tr>
            <td>Proof of Payment</td>
            <td>:</td>
            <td><img style="height:90px; width:80px;" src="gambar/bukti_pembayaran/<?=$produk['nama_file']?>"></td>
        </tr>
    </section>
    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer1 container">
            <div class="footer__content">
                <h3 class="footer__title">Contact Person</h3>

                <ul class="footer__list">
                    <li>dhimaseko00@gmail.com - Dhimas</li>
                    <li>ikhwanw06@gmail.com - Ikhwan</li>
                    <li>tes@gmail.com- Maulana </li>
                </ul>
            </div>
            <div class="footer__content">
                <h3 class="footer__title">About Us</h3>

                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Support Center</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Customer Support</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">About Us</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Copy Right</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">barang</h3>

                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Road bikes</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Mountain bikes</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Electric</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Accesories</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Social</h3>

                <ul class="footer__social">
                    <a href="https://youtu.be/xvFZjo5PgG0" target="_blank" class="footer__social-link">
                        <i class='bx bxl-youtube' ></i>
                    </a>

                    <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-twitter' ></i>
                    </a>

                    <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-instagram' ></i>
                    </a>
                </ul>
            </div>
        </div>
        <hr>
        <span class="footer__copy">&#169; Copyright 2022. by Kelompok 2 B1-21</span>
    </footer>
    
    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up"> 
        <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
    </a>
</body>
</html>