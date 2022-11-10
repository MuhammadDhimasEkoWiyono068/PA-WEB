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

if (isset($_POST['tambah'])) {
    $nama_customer = htmlspecialchars($_POST["nama_customer"]);
    $email = htmlspecialchars($_POST["email"]);
    $nama_barang = htmlspecialchars($_POST["nama_barang"]);
    $jenis = htmlspecialchars($_POST["jenis"]);
    $waktu = date("Y-m-d H-i-s");

    $foto = $_FILES['gambar']['name'];
    $x = explode('.', $foto);
    $extensi = strtolower(end($x));
    $nama_file = "$nama_customer.$extensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    $sql = "INSERT INTO request values('', '$nama_customer', '$email', '$nama_barang', '$jenis', '$nama_file', '$waktu')";
    $result = mysqli_query($conn, $sql);
    
    if ( $result ) {
        echo "
        <script>
            alert('Request Product Successful!');
            document.location.href = 'index.php?username=$user';
        </script>";
        move_uploaded_file($tmp, './gambar/request/'.$nama_file);
    } else {
        echo "
        <script>
            alert('Request Product Failed!');
            document.location.href = 'addreq.php';
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
                    <i class='bx bxs-user' ></i>User
                </a>
            </div>
            <div class="overlay-content">
                <a href="index.php">Home</a>
                <a href="addreq.php">Request Product</a>
                <a href="#classic">Classic Watch</a>
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

    <section>
        <form action="" method="post" enctype="multipart/form-data">
            <table border="0" width="80%">
                <tr>
                    <td colspan="4" align="center">
                        <strong>
                            <font size="5"> 
                                <p>Add Request!</p> 
                                <hr color="black"> 
                            </font>
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td> <br> <label for="nama_customer">Nama </label></td>
                    <td> <br> : </td>
                    <td> <br> <input type="text" name="nama_customer" disabled value="<?php $username = $akun['username']; echo $username ?>"></td>
                </tr>
                <tr>
                    <td> <br> <label for="email">Email </label></td>
                    <td> <br> : </td>
                    <td> <br> <input type="text" maxlength="100" name="email" size="50" disabled value="<?php $email = $akun['email']; echo $email ?>"  required=""></td>
                </tr>
                <tr>
                    <td> <br> <label for="nama_barang">Nama Barang </label></td>
                    <td> <br> : </td>
                    <td> <br> <input type="text" maxlength="100" name="nama_barang" size="50" required=""></td>
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
                    <td> <br> <label for="">Product Image</label></td>
                    <td> <br> : </td>

                    <td> <br> <input type="file" name="gambar" id="gambar"></td>
                </tr>
                <tr>
                    <td colspan="4"> <br> <hr color="black"> <br> </td>
                </tr>
            </table>
            <div class="submit">
                <button type="submit" name="tambah">Add</button> &emsp; <button type="reset" name="batal">Cancel</button>
            </div>
        </form>
    </section>

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