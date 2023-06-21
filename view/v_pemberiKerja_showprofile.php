<?php
require_once '../model/m_konek.php';

if (isset($_POST['detail'])) {
    $pelamar = $_POST['pelamar'];
    $idpekerjaan = $_POST['idpekerjaan'];
    $status = $_POST['status'];
    
    // Query untuk mendapatkan data pelamar
    $query = "SELECT * FROM `pencarikerja` WHERE `username` = '$pelamar'";
    $result = $mysqli->query($query);
    
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Menampilkan data pelamar dalam format HTML
        echo "<h2>Data Pelamar</h2>";
        echo "<p><strong>Username:</strong> " . $row['username'] . "</p>";
        echo "<p><strong>Email:</strong> " . $row['email'] . "</p>";
        echo "<p><strong>Telepon:</strong> " . $row['telepon'] . "</p>";
        echo "<p><strong>Nama:</strong> " . $row['nama'] . "</p>";
        echo "<p><strong>Umur:</strong> " . $row['umur'] . "</p>";
        echo "<p><strong>Alamat:</strong> " . $row['alamat'] . "</p>";
        echo "<p><strong>Tanggal Lahir:</strong> " . $row['tanggallahir'] . "</p>";
        echo "<p><strong>Sex:</strong> " . $row['sex'] . "</p>";

        
        echo "<form action='../controller/c_pemberiKerja_update.php' method='POST' onsubmit='return confirmAction()'>";
        echo "<input type='hidden' name='pelamar' value='" . $pelamar . "'>";
        echo "<input type='hidden' name='idpekerjaan' value='" . $idpekerjaan . "'>";
        echo "<button type='submit' name='status' value='DITERIMA' " . ($status != 'PENDING' ? 'disabled' : '') . ">Terima</button>";
        echo "</form>";
    
        
        echo "<form action='../controller/c_pemberiKerja_update.php' method='POST' onsubmit='return confirmAction()'>";
        echo "<input type='hidden' name='pelamar' value='" . $pelamar . "'>";
        echo "<input type='hidden' name='idpekerjaan' value='" . $idpekerjaan . "'>";
        echo "<button type='submit' name='status' value='DITOLAK' " . ($status != 'PENDING' ? 'disabled' : '') . ">Tolak</button>";
        echo "</form>";
           
    } else {
        echo "Data pelamar tidak ditemukan.";
    }

    echo "<script>
    function confirmAction() {
        return confirm('Apakah Anda yakin ingin melanjutkan?');
    }
</script>";
    
}


