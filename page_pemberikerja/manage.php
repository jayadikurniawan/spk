<?php
include_once("../controller/c_pemberiKerja_manage.php");

$controller = new c_pemberiKerjaManage();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    $posisi = $_POST['posisi'];
    $perusahaan = $_SESSION['user'];
    $gaji = $_POST['gaji'];
    $deskripsi = $_POST['deskripsi'];
    $alamat = $_POST['alamat'];
    $tanggalPosting = $_POST['tanggalPosting'];
    $penerimaan = $_POST['penerimaan'];
    $id = $_POST['id'];

    $controller->add($posisi, $perusahaan, $gaji, $deskripsi, $alamat, $tanggalPosting, $penerimaan, $id);
}

$controller->manage();
