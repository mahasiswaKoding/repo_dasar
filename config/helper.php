<?php

// agar dapat menggunakan properti yang telah di setting di config.php
include "config.php";

// memaggil file koneksi.php
include "koneksi.php";

define('BASE_URL', $base_url);

// membuat fungsi untuk penggunaan url dasar
function base_url($param = NULL)
{
    return BASE_URL . $param;
}

function tampilData($conn, $table)
{
    $query = "SELECT * FROM " . $table;
    $result = $conn->query($query);

    // kembalikan hasil data yg di query
    return $result;
}

function tampilEdit($conn, $table, $id)
{
    $query = "SELECT * FROM " . $table . " WHERE id = '" . $id . "'";

    $result = $conn->query($query);

    // kembalikan hasil data yg di query
    return $result->fetch_assoc();
}
