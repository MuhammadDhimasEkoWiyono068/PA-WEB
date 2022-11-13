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
                <a href="index.php?username=<?php echo $username['username']; ?>">Home</a>
                <a href="addreq.php?username=<?php echo $username['username']; ?>">Request Product</a>
                <a href="#men">Men Watch</a>
                <a href="#women">Women Watch</a>
                <a href="about_us.php">About Us</a>
            </div>
            <div class="logout">
                <a href="logout.php"><i class='bx bx-log-out' ></i>Logout</a>
            </div>
          </div>
    </section>

    <section class="kotak1">
        <!-- <tr> Payment Receipt <br> </tr>
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
        </tr> -->

        <table class="tabel-struk" border="0" >
                <tr>
                    <td colspan="3" align="center">
                        <h1>Payment Receipt</h1> 
                        <hr color="white"> 
                    </td>
                </tr>
                <tr >
                    <td class="form-struk">Name</td>
                    <td>:&nbsp;&nbsp;</td>
                    <td class="isi-struk">
                        <?php echo $produk['nama']; ?>
                    </td>
                </tr>
                <tr>
                    <td class="form-struk">Email</td>
                    <td>:</td>
                    <td class="isi-struk">
                        <?php echo $produk['email']; ?> 
                    </td>
                </tr>
                <tr>
                    <td class="form-struk">Address</td>
                    <td>:</td>
                    <td class="isi-struk">
                        <?php echo $produk['alamat']; ?> 
                    </td>
                </tr>
                <tr>
                    <td class="form-struk">Watch</td>
                    <td>:</td>
                    <td class="isi-struk">
                        <?php echo $produk['nama_barang']; ?>
                    </td>
                </tr>
                <tr>
                    <td class="form-struk">Payment Method</td>
                    <td>:</td>
                    <td class="isi-struk">
                        <?php echo $produk['metode']; ?>
                    </td>
                </tr>
                <tr>
                    <td class="form-struk">Many Purchases</td>
                    <td>:</td>
                    <td class="isi-struk">
                        <?php echo $produk['jumlah']; ?>
                    </td>
                </tr>
                <tr>
                    <td class="form-struk"><label for="">Price</label></td>
                    <td>:</td>
                    <td>
                        $ <?php echo $produk['harga']; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><hr color="white"> </td>
                </tr>
                <tr>
                    <td class="form-struk">Total Price</td>
                    <td>:</td>
                    <td class="isi-struk">
                        $ <?php $total=$produk['harga'] * $produk['jumlah']; echo $total; ?>
                    </td>
                </tr>
            </table>
        <div class="thank">
            <h2>Thank you for the purchase</h2>
            <a href="index.php?username=<?php echo $username['username']; ?>"><h3>Done</h3></a>
        </div>
    
    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up"> 
        <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
    </a>
</body>
</html>