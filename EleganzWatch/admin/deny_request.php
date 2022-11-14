<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}
require '../koneksi.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM request WHERE id=$id");

$data = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

$req = $data[0];

$idreq = $req["id"];

$sql = "UPDATE request SET 
    kondisi = 'Rejected'
    WHERE id = '$id'";

$result = mysqli_query($conn, $sql);
if ( $result ) {
    echo "
    <script>
        alert('Request Rejected');
        document.location.href = 'request.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Data gagal diubah');
        document.location.href = 'deny_request.php';
    </script>
    ";
}
?>