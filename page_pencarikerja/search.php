<?php
include_once("../controller/c_pencarikerja_search.php");

$controller = new c_pencariKerjaSearch();
$keyword = $_GET['keyword'];
$controller->search($keyword);