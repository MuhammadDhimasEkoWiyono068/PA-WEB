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
        <nav class="nav container1">
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
                    <i class='bx bxs-user' ></i>User
                </a>
            </div>
            <div class="overlay-content">
                <a href="index.php?username=<?php echo $username['username']; ?>">Home</a>
                <a href="addreq.php?username=<?php echo $username['username']; ?>">Request Product</a>
                <a href="reqlist.php?username=<?php echo $username['username']; ?>">Request List</a>
                <a href="about_us.php">About Us</a>
            </div>
            <div class="logout">
                <a href="logout.php"><i class='bx bx-log-out' ></i>Logout</a>
            </div>
          </div>
    </section>
    <!--==================== req ====================-->
    <section>
        <div class="kotak-req">
            <table class="list-req" border="1">
                <tr class="judul">
                    <td colspan="8">
                            <h1 align="center"> Your Request </h1>
                    </td>
                </tr>
                <tr class="atas1">
                    <td>No</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Watch</td>
                    <td>Type</td>
                    <td>Image</td>
                    <td>Date</td>
                    <td>Status</td>
                </tr>
                <?php $i = 1; foreach ($request as $req): ?>
                <tr class="isi-req">
                    <td> <?php echo $i; ?> </td>
                    <td> <?php echo $req["nama_customer"]; ?> </td>
                    <td> <?php echo $req["email"]; ?> </td>
                    <td> <?php echo $req["nama_barang"]; ?> </td>
                    <td> <?php echo $req["jenis"]; ?> </td>
                    <td> <img src="gambar/request/<?=$req['nama_file']?>"> </td>
                    <td> <?=$req['waktu'] ?> </td>
                    <td> <?php echo $req["kondisi"]; ?> </td>
                </tr>
                <?php $i++; endforeach ?>
            </table>
        </div>
    </section>
    
    
    
    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up"> 
        <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
    </a>
</body>
</html>



