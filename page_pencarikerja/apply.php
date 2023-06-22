<?php
include_once("../controller/c_pencarikerja_apply.php");

$controller = new c_pencariKerjaApply();

$id = $_GET['id'];
$controller->getPekerjaan($id);