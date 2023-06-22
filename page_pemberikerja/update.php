<?php
include_once("../controller/c_pemberiKerja_profile.php");

$controller = new c_pemberiKerjaProfile();

$pelamar = $_POST['pelamar'];
$idpekerjaan = $_POST['idpekerjaan'];
$status = $_POST['status'];


try {
    $controller->apply($pelamar, $idpekerjaan, $status);
    echo "Status berhasil diperbarui!";
} catch (Exception $e) {
    echo "Gagal memperbarui status: " . $e;
}
