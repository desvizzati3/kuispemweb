<?php

require 'Proyek.php';
$proyek = new Proyek();

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $proyek->HapusProyek($id);
    header('location:index.php');
}
?>