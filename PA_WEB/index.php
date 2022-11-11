<?php
    session_start();

    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
        exit;
    }

    require('koneksi.php');
    $username_ = $_GET['username'];

    $hasil = mysqli_query($conn, "SELECT * FROM user WHERE username='$username_'");

    while ($row = mysqli_fetch_assoc($hasil)) {
        $user[] = $row;
    }

    $username = $user[0];

    if (isset($_GET['submit'])) {
        $keyword = $_GET['keyword'];

        $result = mysqli_query($conn, "SELECT * FROM product WHERE nama LIKE '%$keyword%'
        OR harga LIKE '%$keyword%' ");
    } else {
        $sql = "SELECT * FROM product";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if($row['jenis']=="Men"){
            $result = mysqli_query($conn, 'SELECT * FROM product WHERE jenis = "Men"');

            $product = [];

            while ($row = mysqli_fetch_assoc($result)) {
                $product[] = $row;
            }
        }
        $result = mysqli_query($conn, 'SELECT * FROM product WHERE jenis = "Women"');

        $product1 = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $product1[] = $row;
        }
    }
    
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
                <form action="" method="get">
                    <div class="search">
                        <input type="text" name="keyword" class="searchTerm" placeholder="Search..">
                        <button type="submit" name="cari" class="searchButton"><i class='bx bx-search'></i></button>
                    </div>
                </form>
            </div>
        </nav>
    </header>

    <!--==================== Menu ====================-->
    <section >
        <div id="myNav" class="overlay">
            <div class="topoverlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class='bx bx-x' ></i></a>
                <a href="#" class="nav__logo1">
                    <i class='bx bxs-user' ></i>User
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

    <!--==================== Watch ====================-->

    <section class="jam container">
        <div class="heading">
            <h2 id="men">Men's Watch</h2>
        </div>
        <div class="list-watch">
            <?php $i = 1; foreach ($product as $pdt): ?>
            <div class="watch">
                <div class="watch-image"><img src="gambar/produk/<?=$pdt['nama_file']?>"></div>
                <div class="watch-text">
                    <div class="nama">
                        <h2><?php echo $pdt["nama"]; ?></h2>
                    </div>
                    <div class="harga">
                        <p>$<?php echo $pdt["harga"]; ?></p>
                    </div>
                    <div class="buy">
                        <a href="buy.php?id=<?php echo $pdt['id']; ?>&username=<?php echo $username['username']; ?>"><h2>BUY</h2></a>
                    </div>
                </div>
            </div>
            <?php $i++; endforeach ?>
        </div>
    </section>
    
    <section class="jam container">
        <div class="heading">
            <h2 id="women">Women Watch</h2>
        </div>
        <div class="list-watch">
            <?php $i1 = 1; foreach ($product1 as $pdt1): ?>
            <div class="watch">
                <div class="watch-image"><img src="gambar/produk/<?=$pdt1['nama_file']?>"></div>
                <div class="watch-text">
                    <div class="nama">
                        <h2><?php echo $pdt1["nama"]; ?></h2>
                    </div>
                    <div class="harga">
                        <p>$<?php echo $pdt1["harga"]; ?></p>
                    </div>
                    <div class="buy">
                        <a href="buy.php?id=<?php echo $pdt1['id']; ?>&username=<?php echo $username['username']; ?>"><h2>BUY</h2></a>
                    </div>
                </div>
            </div>
            <?php $i1++; endforeach ?>
        </div>
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