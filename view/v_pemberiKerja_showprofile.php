<?php
echo "<h2>Data Pelamar</h2>";
echo "<p><strong>Username:</strong> " . $row['username'] . "</p>";
echo "<p><strong>Email:</strong> " . $row['email'] . "</p>";
echo "<p><strong>Telepon:</strong> " . $row['telepon'] . "</p>";
echo "<p><strong>Nama:</strong> " . $row['nama'] . "</p>";
echo "<p><strong>Umur:</strong> " . $row['umur'] . "</p>";
echo "<p><strong>Alamat:</strong> " . $row['alamat'] . "</p>";
echo "<p><strong>Tanggal Lahir:</strong> " . $row['tanggallahir'] . "</p>";
echo "<p><strong>Sex:</strong> " . $row['sex'] . "</p>";


echo "<form action='update.php' method='POST' onsubmit='return confirmAction()'>";
echo "<input type='hidden' name='pelamar' value='" . $pelamar . "'>";
echo "<input type='hidden' name='idpekerjaan' value='" . $idpekerjaan . "'>";
echo "<button type='submit' name='status' value='DITERIMA' " . ($status != 'PENDING' ? 'disabled' : '') . ">Terima</button>";
echo "</form>";


echo "<form action='update.php' method='POST' onsubmit='return confirmAction()'>";
echo "<input type='hidden' name='pelamar' value='" . $pelamar . "'>";
echo "<input type='hidden' name='idpekerjaan' value='" . $idpekerjaan . "'>";
echo "<button type='submit' name='status' value='DITOLAK' " . ($status != 'PENDING' ? 'disabled' : '') . ">Tolak</button>";
echo "</form>";

echo "<script>
    function confirmAction() {
        return confirm('Apakah Anda yakin ingin melanjutkan?');
    }
</script>";
