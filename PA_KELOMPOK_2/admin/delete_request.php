<?php
    require 'koneksi.php';

    $id = $_GET['id'];

    $hapus_data = mysqli_query($conn, "SELECT * FROM request WHERE id = '$id'");
    $row = mysqli_fetch_array($hapus_data);

    $gambar = $row['nama_file'];
    $hapus = "./gambar/request/$gambar";

    if(file_exists($hapus))
    {
        unlink($hapus);
    }

    $result = mysqli_query($conn, "DELETE FROM request WHERE id = $id");

    if ( $result ) {
        echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'request.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'delete_request.php';
        </script>";
    }
?>