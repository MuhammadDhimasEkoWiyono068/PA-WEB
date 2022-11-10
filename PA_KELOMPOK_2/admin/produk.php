<?php
session_start();
require 'koneksi.php';

    // if (isset($_GET['cari'])) {
    //     $keyword = $_GET['keyword'];

    //     $result = mysqli_query($conn, "SELECT * FROM buy WHERE Nama LIKE '%$keyword%'
    //     OR Email LIKE '%$keyword%' OR Ukuran LIKE '%$keyword%' OR Barang LIKE '%$keyword%' 
    //     OR Jumlah LIKE '%$keyword%' OR Alamat LIKE '%$keyword%' OR Metode LIKE '%$keyword%'
    //     OR Waktu LIKE '%$keyword%'");
    // } else {
    $result = mysqli_query($conn, "SELECT * FROM buy");
    // }
    $pembelian = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $pembelian[] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="style-transaksi.css?v=<?php echo time(); ?>">
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
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class='bx bx-x' ></i></i></a>
                <a href="#" class="nav__logo1">
                    <i class='bx bxs-watch nav__logo-icon'></i> Eleganz Watch
                </a>
            </div>
            <div class="overlay-content">
                <a href="index.php">Home</a>
                <a href="chart.php">Shopping Chart</a>
                <a href="#classic">Classic Watch</a>
                <a href="#men">Men Watch</a>
                <a href="#">About Us</a>
            </div>
            <div class="login">
                <a href="login.php"><i class='bx bx-log-in' ></i>Login <br> <br> </a>
            </div>
            <div class="logout">
                <a href="logout.php"><i class='bx bx-log-out' ></i>Logout</a>
            </div>
          </div>
    </section>
    <div class="daftar-transaksi">
        <table class="tabel-transaksi" border="1px">
            <tr class="atas">
                <td>No</td>
                <td>Name</td>
                <td>E-mail</td>
                <td>Alamat</td>
                <td>Jumlah</td>
                <td>Metode Pembayaran</td>
                <td>Bukti Pembayaran</td>
                <td>Waktu</td>
                <td>Action</td>
            </tr>
            <?php $i = 1; foreach ($pembelian as $buy): ?>
            <tr>
                <td> <?php echo $i; ?> </td>
                <td> <?php echo $buy["nama"]; ?> </td>
                <td> <?php echo $buy["email"]; ?> </td>
                <td> <?php echo $buy["alamat"]; ?> </td>
                <td> <?php echo $buy["jumlah"]; ?> </td>
                <td> <?php echo $buy["metode"]; ?> </td>
                <td> <img style="height:90px; width:80px;" src="gambar/bukti_pembayaran/<?=$buy['nama_file']?>"> </td>
                <td> <?=$buy['waktu'] ?> </td>
                <td> <a href="edit.php?id=<?php echo $buy['id']; ?>" style="text-decoration: none; color: black;"><strong>Edit</strong></a> | 
                <a href="delete.php?id=<?php echo $buy['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')" style="text-decoration: none; color: black;"><strong>Hapus</strong></a> </td>
            </tr>
            <?php $i++; endforeach ?>
        </table>
    </div>
</body>
</html>