<?php
session_start();
require '../model/m_konek.php';

// Ambil data dari form
$id = $_POST['id'];
$perusahaan = $_POST['perusahaan'];
$posisi = $_POST['posisi'];
$pelamar = $_SESSION['user'];
$status = 'PENDING';

// Query INSERT
$query = "INSERT INTO listpelamar (pelamar, perusahaan, posisi, idpekerjaan, status) VALUES ('$pelamar', '$perusahaan', '$posisi', '$id', '$status')";

if ($mysqli->query($query)) {
    echo "Pendaftaran berhasil!";
} else {
    echo "Pendaftaran gagal: " . $mysqli->error;
}

// Tutup koneksi database
$mysqli->close();
?>
