<?php
include_once("../controller/c_pencarikerja_search.php");

$controller = new c_pencariKerjaSearch();

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
} else {
    $keyword = "gatau"; // Nilai default jika parameter 'keyword' tidak diset
}
$controller->search($keyword);