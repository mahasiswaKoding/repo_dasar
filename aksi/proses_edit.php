<?php

// agar dapat menggunakan properti yang pada file koneksi.php dan fungsi base_url()
include "../config/config.php";
include "../config/koneksi.php";
include "../config/helper.php";

if (isset($_POST['id'])) {
    // set variable untuk query
    $table = 'nama_table';
    $id = $_POST['id'];
    $field_satu = $_POST['field_satu'];
    $field_dua = $_POST['field_dua'];
    $field_tiga = $_POST['field_tiga'];

    $query = "UPDATE $table SET 
                field_satu = '$field_satu', 
                field_dua = '$field_dua', 
                field_tiga = '$field_tiga'
                WHERE id = '$id'";

    if ($conn->query($query)) {
        header('location: ' . base_url() . 'table.php');
    } else {
        die('query error : ' . $conn->error);
    }
} else {
    echo "belum ada input dari halaman tambah data";
}
