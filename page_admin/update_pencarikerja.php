<?php

include("../controller/c_admin.php");
$controller = new c_admin();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $tanggallahir = $_POST['tanggallahir'];
    $sex = $_POST['sex'];

    $controller->updatePencariKerja($username, $password, $email, $telepon, $nama, $umur, $alamat, $tanggallahir, $sex);
}


$id = $_GET["id"];
$controller->getDetailPencariKerja($id);