<?php
require "m_konek.php";

class m_pemberiKerja
{
    public function getListPekerjaan()
    {
        global $mysqli;

        session_start();
        $namaPerusahaan = $_SESSION['user'];

        $query = "SELECT * FROM listpekerjaan WHERE perusahaan = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("s", $namaPerusahaan);
        $stmt->execute();

        $result = $stmt->get_result();

        $rows = array();

        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function addPekerjaan($posisi, $perusahaan, $gaji, $deskripsi, $alamat, $tanggalPosting, $penerimaan, $id)
    {
        global $mysqli;

        $query = "INSERT INTO listpekerjaan (posisi, perusahaan, gaji, deskripsi, alamat, tanggalPosting, penerimaan, id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("ssssssss", $posisi, $perusahaan, $gaji, $deskripsi, $alamat, $tanggalPosting, $penerimaan, $id);
        $stmt->execute();
    }

    public function listApl(){

        global $mysqli;
        session_start();
        $namaPerusahaan = $_SESSION['user'];

        $query = "SELECT * FROM listpelamar WHERE perusahaan = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("s", $namaPerusahaan);
        $stmt->execute();

        $result = $stmt->get_result();

        $rows = array();

        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function getProfile($pelamar){
        global $mysqli;

        $query = "SELECT * FROM `pencarikerja` WHERE `username` = '$pelamar'";
        $result = $mysqli->query($query);
        
        while ($row = $result->fetch_assoc()) {
            $rows = $row;
        }

        return $rows;
    }

    public function apply($status, $pelamar, $idpekerjaan){
        global $mysqli;

        $query = "UPDATE listpelamar SET status = '$status' WHERE pelamar = '$pelamar' AND idpekerjaan = '$idpekerjaan'";
        $mysqli->query($query);
    }
}
