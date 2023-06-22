<?php
    // Ambil data dari form
    session_start();
    require("../model/m_konek.php");
    $posisi = $_POST['posisi'];
    $perusahaan = $_SESSION['user'];
    $gaji = $_POST['gaji'];
    $deskripsi = $_POST['deskripsi'];
    $alamat = $_POST['alamat'];
    $tanggalPosting = $_POST['tanggalPosting'];
    $penerimaan = $_POST['penerimaan'];
    $id = $_POST['id'];

    // Lakukan operasi INSERT ke dalam tabel listpekerjaan
    $query = "INSERT INTO listpekerjaan (posisi, perusahaan, gaji, deskripsi, alamat, tanggalPosting, penerimaan, id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("ssssssss", $posisi, $perusahaan, $gaji, $deskripsi, $alamat, $tanggalPosting, $penerimaan, $id);
    $stmt->execute();

    // Redirect atau berikan respons sesuai kebutuhan Anda
    header("Location: ../view/v_pemberiKerja_manage.php");
    ?>