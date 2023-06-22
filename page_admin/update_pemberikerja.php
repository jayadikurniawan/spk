<?php

include("../controller/c_admin.php");
$controller = new c_admin();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $newEmail = $_POST['email'];
    $newTelepon = $_POST['telepon'];
    $newNama = $_POST['nama'];
    $newAlamat = $_POST['alamat'];
    $controller->updatePemberiKerja($username, $password, $newEmail, $newTelepon, $newNama, $newAlamat);
}

$id = $_GET["id"];
$controller->getDetailPemberiKerja($id);