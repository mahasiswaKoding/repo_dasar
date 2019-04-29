<?php include "header.php"; ?>
<!-- akhir dari bagian header -->

<!-- awal dari bagian navbar -->
<?php include "navbar.php" ?>
<!-- akhir dari bagian navbar -->

<!-- awal dari bagian content -->

<h3>Menampilkan Data Table dari Database</h3>

<a href="<?= base_url('simpan.php') ?>">Tambah Data Baru</a>
<br><br>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Field Satu</th>
            <th>Field Dua</th>
            <th>Field Tiga</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1 ?>
        <?php foreach (tampilData($conn, 'nama_table') as $data) : ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $data['field_satu'] ?></td>
                <td><?= $data['field_dua'] ?></td>
                <td><?= $data['field_tiga'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $data['id'] ?>">Edit</a>
                    <a href="aksi/proses_hapus.php?id=<?= $data['id'] ?>" onclick="alert('apakah kamu yakin ?')">Hapus</a>
                </td>
            </tr>
            <?php $no++ ?>
        <?php endforeach; ?>
    </thead>
</table>


<!-- akhir dari bagian content -->

<!-- awal dari bagian footer -->
<?php include "footer.php" ?>