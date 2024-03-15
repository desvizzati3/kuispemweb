<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Proyek</title>
</head>

<body>
    <h1>Update Proyek</h1>
    <?php
    require 'proyek.php';
    $proyek = new Proyek();
    $id = $_GET['id'];
    $daftar = $proyek->TampilEdit($id);
    ?>

    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $daftar['id']; ?>">

        <label for="nama_proyek">Nama Proyek</label><br>
        <input type="text" name="nama_proyek" id="nama_proyek" value="<?php echo $daftar['nama_proyek']; ?>"><br>

        <label for="deskripsi">Deskripsi</label><br>
        <input type="text" name="deskripsi" id="deskripsi" value="<?php echo $daftar['deskripsi']; ?>"><br>

        <label for="deadline">Deadline</label><br>
        <input type="date" name="deadline" id="deadline" value="<?php echo $daftar['deadline']; ?>"><br>

        <br>
        <input type="submit" value="submit" name="updateproyek">
    </form>

    <?php
    if (isset($_POST['updateproyek'])) {
        $id = $_POST['id'];
        $nama_proyek = $_POST['nama_proyek'];
        $deskripsi = $_POST['deskripsi'];
        $deadline = $_POST['deadline'];
        $proyek->EditProyek($id, $nama_proyek, $deskripsi, $deadline);
        header('location: index.php');
    }
    ?>

</body>
</html>