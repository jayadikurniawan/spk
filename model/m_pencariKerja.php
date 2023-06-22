<?php
require "m_konek.php";

class m_pencariKerja
{
    public function getListPekerjaan($cari)
    {
        global $mysqli;

        $query = "SELECT * FROM listpekerjaan WHERE posisi = '$cari' OR perusahaan = '$cari'";

        $stmt = $mysqli->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result();

        $rows = array();

        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function getPekerjaan($id)
    {
        global $mysqli;

        $query = "SELECT * FROM listpekerjaan WHERE id = '$id'";
        $stmt = $mysqli->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function apply($pelamar, $perusahaan, $posisi, $id, $status)
    {
        global $mysqli;

        $query = "INSERT INTO listpelamar (pelamar, perusahaan, posisi, idpekerjaan, status) VALUES ('$pelamar', '$perusahaan', '$posisi', '$id', '$status')";
        $stmt = $mysqli->prepare($query);
        $stmt->execute();
    }

    public function getListLamar()
    {
        session_start();
        global $mysqli;

        $pelamar = $_SESSION["user"];

        $query = "SELECT * FROM listpelamar WHERE pelamar = ?";

        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("s", $pelamar);
        $stmt->execute();

        $result = $stmt->get_result();

        $rows = array();

        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }
}
