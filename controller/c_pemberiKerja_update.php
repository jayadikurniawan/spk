<?php
session_start();
require '../model/m_konek.php';

if (isset($_POST['pelamar']) && isset($_POST['idpekerjaan']) && isset($_POST['status'])) {

    $pelamar = $_POST['pelamar'];
    $idpekerjaan = $_POST['idpekerjaan'];
    $status = $_POST['status'];

    // Query UPDATE
    $query = "UPDATE listpelamar SET status = '$status' WHERE pelamar = '$pelamar' AND idpekerjaan = '$idpekerjaan'";

    if ($mysqli->query($query)) {
        header("Location: ../view/v_pemberikerja_list.php");
        echo "Status berhasil diperbarui!";
    } else {
        echo "Gagal memperbarui status: " . $mysqli->error;
    }
}

// Tutup koneksi database
$mysqli->close();
?>
