<?php

include("../controller/c_admin.php");
$controller = new c_admin();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $controller->updatePemberiKerja($username, $password);
}

$id = $_GET["id"];
$controller->getDetailPemberiKerja($id);