<?php
// session_start();
require 'koneksi.php';
date_default_timezone_set('asia/kuala_lumpur');
$id = $_GET['username'];

$hasil = mysqli_query($conn, "SELECT * FROM user WHERE username='$id'");

while ($row = mysqli_fetch_assoc($hasil)) {
    $user[] = $row;
}

$akun = $user[0];
$username = $akun['username'];

if (isset($_POST['tambah'])) {
    $nama_customer = htmlspecialchars($_POST["nama_customer"]);
    $email = htmlspecialchars($_POST["email"]);
    $nama_barang = htmlspecialchars($_POST["nama_barang"]);
    $jenis = htmlspecialchars($_POST["jenis"]);
    
    $foto = $_FILES['gambar']['name'];
    $unique = uniqid();
    $x = explode('.', $foto);
    $extensi = strtolower(end($x));
    $nama_file = "$unique.$extensi";
    $tmp = $_FILES['gambar']['tmp_name'];
    $waktu = date("Y-m-d H-i-s");
    
    $status = htmlspecialchars($_POST["status"]);

    $sql = "INSERT INTO request values('', '$nama_customer', '$email', '$nama_barang', '$jenis', '$nama_file', '$waktu', '$status')";
    $result = mysqli_query($conn, $sql);
    
    if ( $result ) {
        echo "
        <script>
            alert('Request Product Successful!');
            document.location.href = 'index.php?username=$username';
        </script>";
        move_uploaded_file($tmp, 'gambar/request/'.$nama_file);
    } else {
        echo "
        <script>
            alert('Request Product Failed!');
            document.location.href = 'addreq.php?username=$username';
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
    <title>Request_Watch</title>
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
                <a href="index.php?username=<?php echo $akun['username']; ?>">Home</a>
                <a href="addreq.php?username=<?php echo $akun['username']; ?>">Request Product</a>
                <a href="reqlist.php?username=<?php echo $akun['username']; ?>">Request List</a>
                <a href="about_us.php">About Us</a>
            </div>
            <div class="logout">
                <a href="logout.php"><i class='bx bx-log-out' ></i>Logout</a>
            </div>
          </div>
    </section>
    

    <section>
        <div class="kotak">
            <form action="" method="post" enctype="multipart/form-data">

                <!-- <table class="req" border="1" >
                        <tr>
                            <td colspan="3" align="center">
                                <h1>Watch Request!</h1> <br>
                                <hr color="white"> <br>
                            </td>
                        </tr>

                        <tr >
                            <td class="form-req"><label for="nama_customer">Name </label></td>
                            <td>:&nbsp;&nbsp;</td>
                            <td class="isi-req1">
                                <input type="hidden" name="nama_customer" value="<?php $username = $akun['username']; echo $username; ?>">
                                <input type="text" name="nama" class="harga-buy" value="<?php $username = $akun['username']; echo $username; ?>" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td class="form-req"><label for="e_mail">Email </label></td>
                            <td>:</td>
                            <td class="isi-req1">
                                <input type="hidden" name="email" value="<?php $email = $akun['email']; echo $email; ?>">
                                <input type="email" maxlength="100" name="e_mail" class="harga-buy" value="<?php $email = $akun['email']; echo $email; ?>" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td class="form-req"><label for="nama_barang">Nama Barang </label></td>
                            <td>:</td>
                            <td class="isi-req1"><input type="text" maxlength="100" name="nama_barang" class="input-req" size="50" required=""></td>
                        </tr>
                        <tr>
                            <td class="form-req"><label for="nama">Product Type</label></td>
                            <td>:</td>
                            <td class="isi-req1">
                                <select class="input-req" name="jenis" required>
                                    <option></option>
                                    <option value="Men">Men Watch</option>
                                    <option value="Women">Women Watch</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="form-req"><label for="">Product Image</label></td>
                            <td>:</td>
                            <td class="form-req"><input type="file" name="gambar" id="gambar"></td>
                        </tr>
                        </tr>
                            <input type="hidden" name="status" value="Waiting">
                        <tr>
                        <tr>
                            <td colspan="4"><hr color="white"></td>
                        </tr>
                    </table> -->


                    <table class="tabel-buy" border="0" >
                    <tr>
                        <td colspan="3" align="center">
                            <h1>Watch Request!</h1> 
                            <hr color="white"> 
                        </td>
                    </tr>
                    <tr >
                        <td class="form-buy">
                            <label for="nama_customer">Customer Name </label>
                        </td>
                        <td>:&nbsp;&nbsp;</td>
                        <td class="isi-buy">
                            <input type="hidden" name="nama_customer" value="<?php $username = $akun['username']; echo $username; ?>">
                            <input type="text" name="nama" class="harga-buy" value="<?php $username = $akun['username']; echo $username; ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td class="form-buy"><label for="e_mail">Email </label></td>
                        <td>:</td>
                        <td class="isi-buy">
                            <input type="hidden" name="email" value="<?php $email = $akun['email']; echo $email; ?>">
                            <input type="email" maxlength="100" name="e_mail" class="harga-buy" value="<?php $email = $akun['email']; echo $email; ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td class="form-buy">
                            <label for="nama_barang">Nama Barang </label>
                        </td>
                        <td>:</td>
                        <td class="isi-buy">
                            <input type="text" maxlength="100" name="nama_barang" class="input-add" size="50" required="">
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
                        <td class="form-buy"><label for="">Product Image</label></td>
                        <td>:</td>
                        <td>
                            <input type="file" class="form-buy" name="gambar" id="gambar">
                        </td>
                    </tr>
                    </tr>
                        <input type="hidden" name="status" value="Waiting">
                        <td colspan="4"><hr color="white"></td>
                    <tr>

                </table>
                <div class="submit" align="center">
                    <button type="submit" name="tambah">Add</button> &emsp; 
                    <button type="reset" name="batal">Cancel</button>
                </div>
            </form>
        </div>
    </section>

    
    
    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up"> 
        <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
    </a>
</body>
</html>