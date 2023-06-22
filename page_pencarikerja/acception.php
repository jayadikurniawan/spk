<?php
include_once("../controller/c_pencarikerja_apply.php");

$id = $_POST['id'];
$perusahaan = $_POST['perusahaan'];
$posisi = $_POST['posisi'];
$pelamar = $_SESSION['user'];
$status = 'PENDING';

$controller = new c_pencariKerjaApply();

try {
    $controller->apply($pelamar, $perusahaan, $posisi, $id, $status);
    echo "Pendaftaran berhasil!";
} catch (Exception $e) {
    echo "Pendaftaran gagal: " . $e;
}