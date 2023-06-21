<?php
require "m_konek.php";
class m_admin
{
    public function getListPencariKerja()
    {
        global $mysqli;

        $query = "SELECT * FROM pencariKerja";
        $stmt = $mysqli->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function getListPemberiKerja()
    {
        global $mysqli;

        $query = "SELECT * FROM pemberiKerja";
        $stmt = $mysqli->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function getDetailPemberiKerja($id)
    {
        global $mysqli;

        $query = "SELECT * FROM pemberiKerja WHERE username = '$id'";
        $stmt = $mysqli->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $rows = $row;
        }

        return $rows;
    }

    public function updatePemberiKerja($id, $password)
    {
        global $mysqli;

        $query = "UPDATE pemberiKerja SET username='$id', password='$password' WHERE username = '$id'";
        $stmt = $mysqli->prepare($query);
        $stmt->execute();
    }

    // public function deleteRow($nomorProgram)
    // {
    //     global $mysqli;

    //     $mysqli->query("DELETE FROM proker WHERE nomorProgram = $nomorProgram");
    // }

    // public function updateRow($no, $nomorProgram, $namaProgram, $suratKeterangan)
    // {
    //     global $mysqli;

    //     try {
    //         $mysqli->query("UPDATE proker SET nomorProgram='$nomorProgram', namaProgram='$namaProgram', suratKeterangan='$suratKeterangan' WHERE nomorProgram='$no'");
    //         return $e = "";
    //     } catch (mysqli_sql_exception $e) {
    //         return $e;
    //     }
    // }

    // public function getRow($nomorProgram)
    // {
    //     global $mysqli;

    //     $rs = $mysqli->query("SELECT * FROM proker WHERE nomorProgram = $nomorProgram");
    //     $rows = array();
    //     while ($row = $rs->fetch_assoc()) {
    //         $rows = $row;
    //     }
    //     return $rows;
    // }

    // public function login($user, $pass)
    // {
    //     if ($user == "admin" && $pass == "admin") {
    //         return "admin";
    //     } else if ($user == "menteri" && $pass == "menteri") {
    //         return "menteri";
    //     } else {
    //         return "";
    //     }
    // }
}
