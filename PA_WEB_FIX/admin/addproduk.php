<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}
require '../koneksi.php';
date_default_timezone_set('asia/kuala_lumpur');

if (isset($_POST['tambah'])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $jenis = htmlspecialchars($_POST["jenis"]);
    $harga = htmlspecialchars($_POST["harga"]);
    $waktu = date("Y-m-d H-i-s");

    $foto = $_FILES['gambar']['name'];
    $x = explode('.', $foto);
    $extensi = strtolower(end($x));
    $nama_file = "$nama.$extensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    $sql = "INSERT INTO product values('', '$nama', '$jenis', '$harga', '$nama_file', '$waktu')";
    $result = mysqli_query($conn, $sql);
    
    if ( $result ) {
        echo "
        <script>
            alert('Add Product Successful!');
            document.location.href = 'index.php';
        </script>";
        move_uploaded_file($tmp, '../gambar/produk/'.$nama_file);
    } else {
        echo "
        <script>
            alert('Add Product Failed!');
            document.location.href = 'addproduk.php';
        </script>";
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

    <div class="add-jam">
        <form action="" method="post" enctype="multipart/form-data">
            <table class="tabel-buy">
                <!-- <tr>
                    <td colspan="4" align="center">
                        <h1>Add Product!</h1> 
                        <hr color="white"> 
                    </td>
                </tr>
                <tr>
                    <td > <br> <label for="nama" >Product Name </label></td>
                    <td> <br> : </td>
                    <td> <br> <input type="text" maxlength="100" name="nama" class="input-add" placeholder="Product Name" required=""></td>
                </tr>
                <tr>
                    <td> <br> <label for="nama">Product Type</label></td>
                    <td> <br> : </td>
                    <td> <br>

                    <select class="input-add" name="jenis" required>
                        <option></option>
                        <option value="Men">Men Watch</option>
                        <option value="Women">Women Watch</option>
                    </select>
                </tr>
                <tr>
                    <td> <br> <label for="email">Price</label></td>
                    <td> <br> : </td>
                    <td> <br> <input type="number" name="harga" class="input-add"min="1"></td>
                </tr>
                <tr>
                    <td> <br> <label for="">Product Image</label></td>
                    <td> <br> : </td>
                    <td> <br> <input type="file" name="gambar" id="gambar"></td>
                </tr>
                <tr>
                    <td colspan="4"> <br> <hr color="white"> <br> </td>
                </tr> -->

                <tr>
                    <td colspan="3" align="center">
                        <h1>Add Product!</h1> 
                        <hr color="white"> 
                        <br>
                    </td>
                </tr>
                <tr >
                    <td class="form-buy"><label for="nama" >Product Name </label></td>
                    <td>:&nbsp;&nbsp;</td>
                    <td class="isi-buy">
                        <input type="text" maxlength="100" name="nama" class="input-add" placeholder="Product Name" required="">
                    </td>
                </tr>
                <tr>
                    <td class="form-buy"><label for="nama">Product Type</label></td>
                    <td>:</td>
                    <td class="isi-buy">
                        <select class="input-add" name="jenis" required>
                            <option></option>
                            <option value="Men">Men Watch</option>
                            <option value="Women">Women Watch</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="form-buy"><label for="email">Price</label></td>
                    <td>:</td>
                    <td class="isi-buy"><input type="number" name="harga" class="input-add"min="1"></td>
                </tr>
                <tr>
                    <td class="form-buy"><label for="">Product Image</label></td>
                    <td>:</td>
                    <td>
                        <input type="file" class="form-buy name="gambar" id="gambar">
                    </td>
                </tr>
                <tr>
                    <td colspan="4"> <br> <hr color="white"> <br> </td>
                </tr>

            </table>
            <div class="submit" align="center">
                <button type="submit" name="tambah">Add</button> &emsp; 
                <button type="reset" name="batal">Cancel</button>
            </div>
        </form>
    </div>

    
    
    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up"> 
        <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
    </a>
</body>
</html>