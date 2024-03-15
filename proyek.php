<?php

class Proyek
{
    public $db;

    public function __construct()
    {
        require 'koneksi.php';
        $this->db = $conn;
    }

    public function TampilProyek()
    {
        $query = $this->db->query("SELECT * FROM proyek");
        $query->execute();
        return $query->fetchAll();
    }

    public function TampilEdit($id){
        $query = $this->db->prepare("SELECT * FROM proyek WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch();
    }

    public function TambahProyek($nama_proyek, $deskripsi, $deadline)
    {
        $query = $this->db->prepare("INSERT INTO proyek (nama_proyek, deskripsi, deadline) VALUES (:nama_proyek, :deskripsi, :deadline)");
        $query->bindParam(':nama_proyek', $nama_proyek);
        $query->bindParam(':deskripsi', $deskripsi);
        $query->bindParam(':deadline', $deadline);
        $query->execute();
        if ($query) {
            return 'berhasil';
        } else {
            return 'gagal';
        }
    }

    public function EditProyek($id, $nama_proyek, $deskripsi, $deadline)
    {
        $query = $this->db->prepare("UPDATE proyek SET nama_proyek = :nama_proyek, deskripsi = :deskripsi, deadline = :deadline WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->bindParam(':nama_proyek', $nama_proyek);
        $query->bindParam(':deskripsi', $deskripsi);
        $query->bindParam(':deadline', $deadline);
        $query->execute();
        if ($query) {
            return 'berhasil';
        } else {
            return 'gagal';
        }
    }

    public function AmbilProyek($id)
    {
        $query = $this->db->prepare("SELECT * FROM proyek WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch();
        if ($query) {
            return $query;
        } else {
            return 'gagal';
        }
    }

    public function HapusProyek($id)
    {
        $query = $this->db->prepare("DELETE FROM proyek WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        if ($query) {
            return 'berhasil';
        } else {
            return 'gagal';
        }
    }
}
?>
