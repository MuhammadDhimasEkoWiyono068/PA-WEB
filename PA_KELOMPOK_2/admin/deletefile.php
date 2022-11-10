<?php 

require 'koneksi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $hapus_data = mysqli_query($conn,
                  "SELECT * FROM buy WHERE id = '$id'");
    $row = mysqli_fetch_array($hapus_data);

    $gambar = $row['nama_file'];
    $hapus = "gambar/bukti_pembayaran/$gambar";

    if(file_exists($hapus))
    {
        unlink($hapus);
    }

    $result = mysqli_query($conn, 
        "DELETE FROM buy WHERE id='$id'");

    if($result){
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href = 'chart.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Gagal Dihapus');
            </script>
        ";
    }
}