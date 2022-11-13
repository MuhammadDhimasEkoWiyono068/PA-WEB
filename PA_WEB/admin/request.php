<?php
    session_start();

    if (!isset($_SESSION['login'])) {
        header("Location: ../login.php");
        exit;
    }

    require('koneksi.php');

    if (isset($_GET['submit'])) {
        $keyword = $_GET['keyword'];

        $result = mysqli_query($conn, "SELECT * FROM request WHERE nama_customer LIKE '%$keyword%'
        OR nama_barang LIKE '%$keyword%' ");
    } else {
        $result = mysqli_query($conn, "SELECT * FROM request");
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
                    <i class='bx bxs-user' ></i>Admin
                </a>
            </div>
            <div class="overlay-content">
                <a href="index.php">Home</a>
                <a href="request.php">User Request</a>
                <a href="add_admin.php">Add Admin</a>
                <a href="transaksi.php">Transaction Data</a>
                <a href="#">About Us</a>
            </div>
            <div class="logout">
                <a href="logout.php"><i class='bx bx-log-out' ></i>Logout</a>
            </div>
          </div>
    </section>

    
    <div class="list-req">
        <tr>
            <h1> User Request </h1>
        </tr>
        <table class="table-request" border="1">
            <tr class="atas">
                <td>No</td>
                <td>Name</td>
                <td>Email</td>
                <td>Barang</td>
                <td>Jenis</td>
                <td>Gambar</td>
                <td>Waktu</td>
                <td>Action</td>
            </tr>
            <?php $i = 1; foreach ($request as $req): ?>
            <tr>
                <td> <?php echo $i; ?> </td>
                <td> <?php echo $req["nama_customer"]; ?> </td>
                <td> <?php echo $req["email"]; ?> </td>
                <td> <?php echo $req["nama_barang"]; ?> </td>
                <td> <?php echo $req["jenis"]; ?> </td>
                <td class="req-img"> <img src="../gambar/request/<?=$req['nama_file']?>"> </td>
                <td> <?=$req['waktu'] ?> </td>
                <td class="persetujian"> 
                    <a href="acc_request.php?id=<?php echo $req['id']; ?>"><i class='bx bx-check'></i></a>
                    <a href="deny_request.php?id=<?php echo $req['id']; ?>"><i class='bx bx-x' ></i></a>
                </td>
            </tr>
            <?php $i++; endforeach ?>
        </table>
    </div>
    
    
    
    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up"> 
        <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
    </a>
</body>
</html>



