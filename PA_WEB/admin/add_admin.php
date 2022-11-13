<?php

require 'koneksi.php';
if (isset($_POST['regis'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    if ($password === $cpassword) {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
        if (mysqli_fetch_assoc($result)) {
            echo "
                <script>
                    alert('Username telah digunakan!');
                    location.href = 'regis.php';
                </script>
            ";
        } else {
            $sql = "INSERT INTO user VALUES (' ', '$username', '$password','$email', '$role')";
            $result = mysqli_query($conn, $sql);
            if (mysqli_affected_rows($conn) > 0) {
                echo "
                    <script>
                        alert('Berhasil Menambahkan Admin!');
                        location.href = 'add_admin.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('Gagal Registrasi!');
                        location.href = 'add_admin.php';
                    </script>
                ";
            }
        }
    } else {
        echo "
            <script>
                alert('Password anda salah!');
                location.href = 'add_admin.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="style-add_admin.css?v=<?php echo time(); ?>">
    <!-- Link BoxIcon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/6ed6487098.js" crossorigin="anonymous"></script>  
</head>
<body id="login">

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

    <form action="" class="login" method="post">
        <div class="gambar-logo">
            <i class='bx bxs-user-plus'></i> Add<span>Admin</span>
        </div>
        <div class="inputfield">
            <label for="">Username</label>
            <input type="text" name="username" id="" class="isi-login" placeholder="  Username" required>
        </div> 
        <div class="inputfield">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="isi-login" placeholder="  Password" required>
        </div>
        <div class="inputfield">
            <label for="">Confirm Password</label>
            <input type="password" name="cpassword" id="" class="isi-login" placeholder="  Password" required>
        </div>
        <div class="email">
            <label for="">E-mail</label>
            <input type="email" name="email" id="" class="isi-login" placeholder="  Email">
        </div>
        <div class="pilihrole">
            <label for="">Role</label>
            <select class="role" name="role">
                <option value="admin">Admin</option>
            </select>
        </div> 
        <div class="button-login">
            <input type="submit" class="inputlogin" name="regis"  onclick='check()' value="ADD">
        </div>
    </form>
</body>
</html>