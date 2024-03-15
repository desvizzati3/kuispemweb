<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Proyek</title>
</head>
<body>
    <!-- lihat -->
    <h1>Daftar Proyek</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Proyek</th>
            <th>Deskripsi</th>
            <th>Deadline</th>
        </tr>

        <?php
        require 'proyek.php';
        $proyek = new Proyek();
        $data = $proyek->TampilProyek();
        $no = 1;
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nama_proyek']."</td>";
            echo "<td>".$row['deskripsi']."</td>";
            echo "<td>".$row['deadline']."</td>";
            echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a> | <a href='delete.php?id=".$row['id']."'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>

    </table>
    <br>
    <!-- tambah -->
    <h1>Tambah Proyek</h1>
    <form action="tambah.php" method="post">
        <label for="nama_proyek">Nama Proyek</label><br>
        <input type="text" name="nama_proyek" id="nama_proyek"><br>
        <label for="deskripsi">Deskripsi</label><br>
        <input type="text" name="deskripsi" id="deskripsi"><br>
        <label for="deadline">Deadline</label>
        <input type="date" name="deadline" id="deadline"><br>
        <br>
        <input type="submit" value="Tambah" name="tambah_proyek">
    </form>
</body>
</html>