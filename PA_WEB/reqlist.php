<?php
    session_start();

    if (!isset($_SESSION['login'])) {
        header("Location: ../login.php");
        exit;
    }

    require('koneksi.php');
    $username_ = $_GET['username'];

    $hasil = mysqli_query($conn, "SELECT * FROM user WHERE username='$username_'");

    while ($row = mysqli_fetch_assoc($hasil)) {
        $user[] = $row;
    }

    $username = $user[0];
    $nama = $username['username'];

    if (isset($_GET['submit'])) {
        $keyword = $_GET['keyword'];

        $result = mysqli_query($conn, "SELECT * FROM request WHERE nama_customer LIKE '%$keyword%'
        OR nama_barang LIKE '%$keyword%'");
    } else {
        $result = mysqli_query($conn, "SELECT * FROM request WHERE nama_customer='$username_'");
    }
    $request = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $request[] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aaaaaa</title>
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
                <a href="reqlist.php?username=<?php echo $username['username']; ?>">Request List</a>
                <a href="#men">Men Watch</a>
                <a href="#women">Women Watch</a>
                <a href="#">About Us</a>
            </div>
            <div class="logout">
                <a href="logout.php"><i class='bx bx-log-out' ></i>Logout</a>
            </div>
          </div>
    </section>
    <section class="promosi">
        <video id="background-video" autoplay muted loop>
            <source src="video/videoplayback.mp4"type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </section>

    <!--==================== Jam ====================-->
    <section>
        <table border="1">
            <tr class="judul">
                <td colspan="11" align="center">
                    <strong>
                        <font size="5">
                        <h1 align="center"> Table Request! </h1>
                        </font>
                    </strong>
                    <!-- <form action="" method="get">
                        <tr>
                            <td colspan="10" align="right"><input type="text" name="keyword"></td>
                            <td><button type="submit" name="cari">Search</button></td>
                        </tr>
                    </form> -->
                </td>
            </tr>
            <tr>
                <td>No</td>
                <td>Name</td>
                <td>Email</td>
                <td>Barang</td>
                <td>Jenis</td>
                <td>Gambar</td>
                <td>Waktu</td>
                <td>Status</td>
            </tr>
            <?php $i = 1; foreach ($request as $req): ?>
            <tr>
                <td> <?php echo $i; ?> </td>
                <td> <?php echo $req["nama_customer"]; ?> </td>
                <td> <?php echo $req["email"]; ?> </td>
                <td> <?php echo $req["nama_barang"]; ?> </td>
                <td> <?php echo $req["jenis"]; ?> </td>
                <td> <img style="height:90px; width:80px;" src="gambar/request/<?=$req['nama_file']?>"> </td>
                <td> <?=$req['waktu'] ?> </td>
                <td> <?php echo $req["kondisi"]; ?> </td>
            </tr>
            <?php $i++; endforeach ?>
        </table>
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
                <h3 class="footer__title">Product</h3>

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



