<?php
    $conn = mysqli_connect("localhost", "root", "", "EleganzWatch");

    if (!$conn) {
        die("Gagal terhubung ke database". mysqli_connect_eror());
    }


// ----------------- index -----------------

function queryMen($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $product = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $product[] = $row;
    }
    return $product;
}

function queryWomen($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $product1 = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $product1[] = $row;
    }
    return $product1;
}

function cariMen($keyword) {
    $query = "SELECT * FROM product WHERE jenis = 'Men' AND nama LIKE '%$keyword%'
    OR harga LIKE '%$keyword%'";

    return queryMen($query);
}

function cariWomen($keyword) {
    $query = "SELECT * FROM product WHERE jenis = 'Women' AND nama LIKE '%$keyword%'
    OR harga LIKE '%$keyword%'";

    return queryWomen($query);
}

// ---------------------------  User Request ---------------------------

function request($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $request = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $request[] = $row;
    }
    return $request;
}

function cariRequest($keyword) {
    $query = "SELECT * FROM request WHERE nama_customer LIKE '%$keyword%'
    OR email LIKE '%$keyword%' OR nama_barang LIKE '%$keyword%'OR jenis LIKE '%$keyword%' OR waktu LIKE '%$keyword%'
    OR kondisi LIKE '%$keyword%'";

    return request($query);
}

?>