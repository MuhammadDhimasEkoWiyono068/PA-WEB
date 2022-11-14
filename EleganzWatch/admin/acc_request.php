<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}
require '../koneksi.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM request WHERE id=$id");

$pembelian = [];

while ($row = mysqli_fetch_assoc($result)) {
    $pembelian[] = $row;
}

$product = $pembelian[0];

$sql = "UPDATE request SET 
    kondisi = 'Accepted'
    WHERE id = '$id'";

$result = mysqli_query($conn, $sql);
if ( $result ) {
    echo "
    <script>
        alert('Request accepted');
        document.location.href = 'request.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data gagal diubah');
        document.location.href = 'request.php';
    </script>
    ";
}
?>