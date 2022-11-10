<?php
    session_start();

    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
        exit;
    }

    require('koneksi.php');

    if (isset($_GET['submit'])) {
        $keyword = $_GET['keyword'];

        $result = mysqli_query($conn, "SELECT * FROM buy WHERE nama LIKE '%$keyword%'
        OR harga LIKE '%$keyword%' ");
    } else {
        $result = mysqli_query($conn, "SELECT * FROM buy");
    }
    $buy = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $buy[] = $row;
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
                <a href="index.php">Home</a>
                <a href="chart.php">User Request</a>
                <a href="add_admin.php">Add Admin</a>
                <a href="transaksi.php">Transaction Data</a>
                <a href="#">About Us</a>
            </div>
            <div class="logout">
                <a href="logout.php"><i class='bx bx-log-out' ></i>Logout</a>
            </div>
          </div>
    </section>

    <div class="kotak2">
        <table class="tabel-transaksi" border="1">
            <tr class="judul">
                <td colspan="5">
                    <h1 > User Transaction! </h1>
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
                <td>Information</td>
                <td>Bukti Pembayaran</td>
                <td>Date</td>
                <td>Action</td>
            </tr>
            <?php $i = 1; foreach ($buy as $buy): ?>
            <tr>
                <td> <?php echo $i; ?> </td>
                <td> 
                    <table class="tabel-info" >
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?php echo $buy["nama"]; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo $buy["email"]; ?></td>
                        </tr>
                        <tr>
                            <td>Watch</td>
                            <td>:</td>
                            <td><?php echo $buy["nama_barang"]; ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td><?php echo $buy["alamat"]; ?></td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>:</td>
                            <td>$<?php echo $buy["harga"]; ?></td>
                        </tr>
                        <tr>
                            <td>Total Buy</td>
                            <td>:</td>
                            <td><?php echo $buy["jumlah"]; ?></td>
                        </tr>
                        <tr>
                            <td>Total Price&nbsp;&nbsp;</td>
                            <td>:&nbsp;&nbsp;</td>
                            <td>$<?php echo $buy["harga"] * $buy["jumlah"]; ?></td>
                        </tr>
                    </table>

                    <!-- Nama : <?php echo $buy["nama"]; ?> <br>
                    Email  : <?php echo $buy["email"]; ?><br>
                    Watch : <?php echo $buy["nama_barang"]; ?><br>
                    Address : <?php echo $buy["alamat"]; ?><br>
                    Price : $<?php echo $buy["harga"]; ?><br>
                    Total Buy : <?php echo $buy["jumlah"]; ?><br>
                    Total Price : <?php echo $buy["harga"] * $buy["jumlah"]; ?> -->
                </td>
                <td> <img style="height:150px; width:120px;" src="../gambar/bukti_pembayaran/<?=$buy['nama_file']?>"> </td>
                <td> <?=$buy['waktu'] ?> </td>
                <td class="operation"><a href="delete_pembayaran.php?id=<?php echo $buy["id"]; ?>" onclick = "return confirm('Are you sure to delete this transaction?')"><i class='bx bx-trash' ></i></a></td>
            </tr>
            <?php $i++; endforeach ?>
        </table>
    </div>
</body>
</html>