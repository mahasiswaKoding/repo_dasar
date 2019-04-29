<?php

// membuat variable yang menampung koneksi ke database
$conn = new mysqli($host, $username, $password, $dbname) or die('Koneksi Error : ' . $conn->connect_error);
