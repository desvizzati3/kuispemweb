<?php

require 'proyek.php';
$proyek = new Proyek();

if (isset($_POST['tambah_proyek'])){
    $nama_proyek = $_POST['nama_proyek'];
    $deskripsi = $_POST['deskripsi'];
    $deadline = $_POST['deadline'];

    $proyek->TambahProyek($nama_proyek, $deskripsi, $deadline);
    header('location: index.php');
}

?>