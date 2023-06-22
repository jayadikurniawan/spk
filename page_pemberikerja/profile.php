<?php
include_once("../controller/c_pemberiKerja_profile.php");

$controller = new c_pemberiKerjaProfile();

$pelamar = $_POST['pelamar'];
$idpekerjaan = $_POST['idpekerjaan'];
$status = $_POST['status'];

$controller->profile($pelamar, $idpekerjaan, $status);