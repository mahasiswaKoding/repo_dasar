<?php include "config/helper.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- judul singkat dari halaman web -->
    <title><?= $judul_singkat ?></title>

    <!-- disini akan ada link untuk sumber code lain -->

</head>

<body>
    <h1><?= $judul_website ?></h1>
    <!-- akhir dari bagian header -->

    <!-- awal dari bagian navbar -->
    <ul>
        <li><a href="<?= base_url() ?>">Home</a></li>
        <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
    </ul>
    <!-- akhir dari bagian navbar -->

    <!-- awal dari bagian content -->
    <h3>Membuat Struktur dasar untuk CRUD WEB APP Sederhana</h3>
    <!-- akhir dari bagian content -->

    <!-- awal dari bagian footer -->
    <div>
        <p>Copyright &copy; <?= $nama . " . " . (isset($perusahaan) ? $perusahaan : NULL) ?> 2019</p>
    </div>
</body>

</html>