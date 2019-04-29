<?php

// agar dapat menggunakan properti yang pada file koneksi.php dan fungsi base_url()
include "../config/config.php";
include "../config/koneksi.php";
include "../config/helper.php";

if (isset($_GET['id'])) {
    // set variable untuk query
    $table = 'nama_table';
    $id = $_GET['id'];

    $query = "DELETE FROM $table WHERE id = '$id'";

    if ($conn->query($query)) {
        header('location: ' . base_url() . 'table.php');
    } else {
        die('query error : ' . $conn->error);
    }
} else {
    echo "belum ada input dari halaman tambah data";
}
