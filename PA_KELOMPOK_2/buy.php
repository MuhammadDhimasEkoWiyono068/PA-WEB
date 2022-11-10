<?php
session_start();
require 'koneksi.php';
date_default_timezone_set('asia/kuala_lumpur');
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM product WHERE id=$id");

while ($row = mysqli_fetch_assoc($result)) {
    $barang[] = $row;
}

$product = $barang[0];

if (isset($_POST['tambah'])) {
    $barang = htmlspecialchars($_POST["barang"]);
    $nama_barang = htmlspecialchars($_POST["nama_barang"]);
    $nama = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $harga = htmlspecialchars($_POST["harga"]);
    $jumlah = htmlspecialchars($_POST["jumlah"]);
    $pembayaran = htmlspecialchars($_POST["pembayaran"]);
    $waktu = date("Y-m-d H-i-s");

    $foto = $_FILES['gambar']['name'];
    $unique = uniqid();
    $x = explode('.', $foto);
    $extensi = strtolower(end($x));
    $bukti_pembayaran = "$unique.$extensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    $sql = "INSERT INTO buy values('','$barang', '$nama_barang', '$nama', '$email', '$alamat', '$harga', '$jumlah', '$pembayaran', '$bukti_pembayaran', '$waktu')";
    $result = mysqli_query($conn, $sql);
    
    if ( $result ) {
        echo "
        <script>
            alert('Purchase Successful!');
            document.location.href = 'struk.php';
        </script>";
        move_uploaded_file($tmp, 'gambar/bukti_pembayaran/'.$bukti_pembayaran);
    } else {
        echo "
        <script>
            alert('Purchase Failed!');
            document.location.href = 'buy.php';
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
    <title>Buy</title>
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
                <a href="request.php">Request Product</a>
                <a href="#men">Men Watch</a>
                <a href="#women">Women Watch</a>
                <a href="#">About Us</a>
            </div>
            <div class="logout">
                <a href="logout.php"><i class='bx bx-log-out' ></i>Logout</a>
            </div>
          </div>
    </section>

    <div class="kotak">
        <form action="" method="post" enctype="multipart/form-data">
            <table class="buy">
                <tr>
                    <td colspan="4" align="center">
                        <h1>Order Watch!</h1> 
                        <hr color="white"> 
                    </td>
                </tr>
                <input type="hidden" name="barang" value="<?php $barang = $product['nama_file']; echo $barang; ?>">
                <input type="hidden" name="nama_barang" value="<?php $nama_barang = $product['nama']; echo $nama_barang; ?>">
                <tr>
                    <td> <br> <label for="name">Customer Name</label></td>
                    <td> <br> : </td>
                    <td> <br> <input type="text" maxlength="100"  name="name" class="input-add" placeholder="Full Name" required=""></td>
                </tr>
                <tr>
                    <td> <br> <label for="email">Email</label></td>
                    <td> <br> : </td>
                    <td> <br> <input type="email" name="email" class="input-add" placeholder="Email address" required=""></td>
                </tr>
                <tr>
                    <td> <br> <label for="ukuran">Address</label></td>
                    <td> <br> : </td>
                    <td> <br> <textarea class="alamat" name="alamat" placeholder="Address" required=""></textarea></td>
                </tr>
                <tr>
                    <td> <br> <label for="harga">Price</label></td>
                    <td> <br> : </td>
                    <td> <br> $ <input type="text" name="harga1" class="harga-buy" disabled value="<?php $harga = $product['harga']; echo $harga; ?>">
                    <input type="hidden" name="harga" value="<?php $harga = $product['harga']; echo $harga; ?>"></td>
                </tr>
                <tr>
                    <td> <br> <label for="jumlah">Many Purchases</label></td>
                    <td> <br> : </td>
                    <td> <br> <input type="number" name="jumlah" class="input-add" min="1"></td>
                </tr>
                <tr>
                    <td> <label for="pembayaran"> <br> Payment Method</label></td>
                    <td> <br> : </td>
                    <td> <br> <input type="radio" name="pembayaran" value="Credit" required=""> Credit &emsp;
                    <input type="radio" name="pembayaran" value="Cash" required="">Cash</td>
                </tr>
                <tr>
                    <td> <br> <label for="">Proof of payment</label></td>
                    <td> <br> : </td>
                    <td> <br> <input type="file" name="gambar" id="gambar"></td>
                </tr>
                <tr>
                    <td colspan="4"> <br> <hr color="white"> <br> </td>
                </tr>
            </table>
            <div class="submit" align="center">
                <button type="submit" name="tambah">Buy</button> &emsp;
                <button type="reset" name="batal">Reset</button>
            </div>
        </form>
    </div>
</body>
</html>