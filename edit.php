<?php include "header.php"; ?>
<!-- akhir dari bagian header -->

<!-- awal dari bagian navbar -->
<?php include "navbar.php" ?>
<!-- akhir dari bagian navbar -->

<!-- awal dari bagian content -->

<?php

$id = $_GET['id'];
$data = tampilEdit($conn, 'nama_table', $id);

?>

<h3>Tambah Data Baru</h3>

<form action="aksi/proses_edit.php" method="post">
    <div>
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
    </div>
    <div>
        <label for="field_satu">Field Satu : </label>
        <input type="text" name="field_satu" value="<?= $data['field_satu'] ?>" required>
    </div>
    <div>
        <label for="fiel_dua">Fiel Dua : </label>
        <input type="text" name="field_dua" value="<?= $data['field_dua'] ?>">
    </div>
    <div>
        <label for="field_tiga">Field Tiga : </label>
        <input type="text" name="field_tiga" value="<?= $data['field_tiga'] ?>">
    </div>
    <div>
        <input type="submit" value="simpan">
        <button><a href="<?= base_url('table.php') ?>">Batal</a></button>
    </div>
</form>


<!-- akhir dari bagian content -->

<!-- awal dari bagian footer -->
<?php include "footer.php" ?>