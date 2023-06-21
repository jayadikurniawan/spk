<?php
include_once("../controller/c_admin.php");
$controller = new c_admin();

$id = $_GET["id"];
$controller->deletePemberiKerja($id);