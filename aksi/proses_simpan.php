<?php

// agar dapat menggunakan properti yang pada file koneksi.php dan fungsi base_url()
include "../config/config.php";
include "../config/koneksi.php";
include "../config/helper.php";

if (isset($_POST['field_satu'])) {
    // set variable untuk query
    $table = 'nama_table';
    $field_satu = $_POST['field_satu'];
    $field_dua = $_POST['field_dua'];
    $field_tiga = $_POST['field_tiga'];

    $query = "INSERT INTO $table VALUE (NULL, '$field_satu', '$field_dua', '$field_tiga')";

    if ($conn->query($query)) {
        header('location: ' . base_url() . 'table.php');
    } else {
        die('query error : ' . $conn->error);
    }
} else {
    echo "belum ada input dari halaman tambah data";
}
