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

function requestWaiting($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $data = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function requestAccepted($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $data1 = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $data1[] = $row;
    }
    return $data1;
}

function requestRejected($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $data2 = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $data2[] = $row;
    }
    return $data2;
}

function cariWaiting($keyword) {
    $query = "SELECT * FROM request WHERE kondisi = 'Waiting' AND nama_customer LIKE '%$keyword%'
    OR email LIKE '%$keyword%'";

    return requestWaiting($query);
}

function cariAccepted($keyword) {
    $query = "SELECT * FROM request WHERE kondisi = 'Accepted' AND nama_customer LIKE '%$keyword%'
    OR email LIKE '%$keyword%'";

    return requestAccepted($query);
}

function cariRejected($keyword) {
    $query = "SELECT * FROM request WHERE kondisi = 'Rejected' AND nama_customer LIKE '%$keyword%'
    OR email LIKE '%$keyword%'";

    return requestRejected($query);
}

?>