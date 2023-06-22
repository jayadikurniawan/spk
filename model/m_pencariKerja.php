<?php
require "m_konek.php";

class m_pencariKerja
{
    public function getListPekerjaan()
    {
        global $mysqli;

        $query = "SELECT * FROM listpekerjaan";
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

    

}
