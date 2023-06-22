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

        $rows = array();

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

        $rows = array();

        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function getDetailPencariKerja($id)
    {
        global $mysqli;

        $query = "SELECT * FROM pencariKerja WHERE username = '$id'";
        $stmt = $mysqli->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $rows = $row;
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

    public function updatePencariKerja($id, $password)
    {
        global $mysqli;

        $query = "UPDATE pencariKerja SET username='$id', password='$password' WHERE username = '$id'";
        $stmt = $mysqli->prepare($query);
        $stmt->execute();
    }

    public function updatePemberiKerja($username, $password, $newEmail, $newTelepon, $newNama, $newAlamat)
    {
        global $mysqli;

        $query = "UPDATE pemberiKerja SET username=?, password=?, email=?, telepon=?, nama=?, alamat=? WHERE username=?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("sssssss", $username, $password, $newEmail, $newTelepon, $newNama, $newAlamat, $username);
        $stmt->execute();
        
    }

    public function deletePencariKerja($id)
    {
        global $mysqli;

        $query = "DELETE FROM pencariKerja where username = '$id'";
        $stmt = $mysqli->prepare($query);
        $stmt->execute();
    }

    public function deletePemberiKerja($id)
    {
        global $mysqli;

        $query = "DELETE FROM pemberiKerja where username = '$id'";
        $stmt = $mysqli->prepare($query);
        $stmt->execute();
    }
}
