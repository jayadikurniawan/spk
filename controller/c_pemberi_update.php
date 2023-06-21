<?php
require '../model/m_konek.php';

// Ambil data dari parameter GET
$pelamar = $_GET['pelamar'];
$idpekerjaan = $_GET['idpekerjaan'];

// Query UPDATE
$query = "UPDATE listpelamar SET status = 'terima' WHERE pelamar = '$pelamar' AND id = $idpekerjaan";

if ($mysqli->query($query)) {
    echo "Status berhasil diperbarui!";
} else {
    echo "Gagal memperbarui status: " . $mysqli->error;
}

// Tutup koneksi database
$mysqli->close();
?>
