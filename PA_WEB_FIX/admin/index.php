<?php
    session_start();

    if (!isset($_SESSION['login'])) {
        header("Location: ../login.php");
        exit;
    }

    require('../koneksi.php');

    // if (isset($_GET['submit'])) {
    //     $keyword = $_GET['keyword'];

    //     $result = mysqli_query($conn, "SELECT * FROM product WHERE nama LIKE '%$keyword%'
    //     OR harga LIKE '%$keyword%' ");
    // } else {
    //     $result = mysqli_query($conn, "SELECT * FROM product");
    // }
    // $product = [];

    // while ($row = mysqli_fetch_assoc($result)) {
    //     $product[] = $row;
    // }

    $result = mysqli_query($conn, "SELECT * FROM product");

    $product = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $product[] = $row;
    }

    if (isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];

        $result = mysqli_query($conn, "SELECT * FROM product WHERE nama LIKE '%$keyword%'");
    } else {
        $result = mysqli_query($conn, "SELECT * FROM product");
    }

    $product = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $product[] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
                    <i class='bx bxs-user' ></i>Admin
                </a>
            </div>
            <div class="overlay-content">
                <a href="index.php">Home </a>
                <a href="request.php">User Request </a>
                <a href="add_admin.php">Add Admin </a>
                <a href="transaksi.php">Transaction Data </a>
                <a href="#">About Us </a>
            </div>
            <div class="logout">
                <a href="logout.php"><i class='bx bx-log-out' ></i>Logout</a>
            </div>
          </div>
    </section>

    <!--==================== TABEL PRODUK ====================-->
    <div class="kotak">
        <tr>
            <h1 class="tabel-product"> Table Product! </h1>
            <button><a href="addproduk.php"><i class='bx bx-plus' ></i></a></button>
                <!-- <form action="" method="get">
                    <tr>
                        <td colspan="10" align="right"><input type="text" name="keyword"></td>
                        <td><button type="submit" name="cari">Search</button></td>
                    </tr>
                </form> -->
            </td>
        </tr>
        <table class="tabel-data" border="1">
            <tr class="atas">
                <td>No</td>
                <td class="watch">Watch</td>
                <td>Image</td>
                <td class="date">Date</td>
                <td>Action</td>
            </tr>
            <?php $i = 1; foreach ($product as $pdt): ?>
            <tr>
            <td> <?php echo $i; ?> </td>
                <td> 
                    <table class="tabel-info1" >
                        <tr>
                            <td>Name&nbsp;</td>
                            <td>:&nbsp;</td>
                            <td><?php echo $pdt["nama"]; ?></td>
                        </tr>
                        <tr>
                            <td>Type</td>
                            <td>:</td>
                            <td><?php echo $pdt["jenis"]; ?></td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>:</td>
                            <td>$<?php echo $pdt["harga"]; ?></td>
                        </tr>
                    </table>
                </td>
                <!-- <td> <?php echo $i; ?> </td>
                <td> <?php echo $pdt["nama"]; ?> </td>
                <td> <?php echo $pdt["jenis"]; ?> </td>
                <td> $<?php echo $pdt["harga"]; ?> </td> -->
                <td class="jam-img"> <img src="../gambar/produk/<?=$pdt['nama_file']?>"> </td>
                <td class="date"> <?=$pdt['waktu'] ?> </td>
                <td class="operation"><a href="edit.php?id=<?php echo $pdt["id"]; ?>"><i class='bx bx-pencil'></i></i></a> 
                <a href="delete.php?id=<?php echo $pdt["id"]; ?>" onclick = "return confirm('Are you sure to delete this product?')"><i class='bx bx-trash' ></i></a></td>
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