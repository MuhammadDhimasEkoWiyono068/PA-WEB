<?php
    $conn = mysqli_connect("localhost", "root", "", "EleganzWatch");

    if (!$conn) {
        die("Gagal terhubung ke database". mysqli_connect_eror());
    }
?>  