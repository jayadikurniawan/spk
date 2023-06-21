<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Pemberi Kerja</title>
    <!-- Tambahkan CSS Anda di sini -->
    <style>
        /* CSS Anda */
    </style>
</head>
<body>
    <h1>Dashboard Pemberi Kerja</h1>
    <h2>Data List Pelamar</h2>

    <!-- Tampilan data List Pekerjaan -->
    <table>
        <thead>
            <tr>
                <th>pelamar</th>
                <th>posisi</th>
                <th>status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <!-- Looping data dari database -->
            <?php
            // Ambil data dari database berdasarkan nama perusahaan dari session user
            session_start();
            $namaPerusahaan = $_SESSION['user'];
            require("../model/m_konek.php");

            // Query untuk mendapatkan data list pekerjaan perusahaan tertentu
            $query = "SELECT * FROM listpelamar WHERE perusahaan = ?";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param("s", $namaPerusahaan);
            $stmt->execute();

            // Ambil semua data dan tampilkan dalam tabel
            $result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['pelamar'] . "</td>";
    echo "<td>" . $row['posisi'] . "</td>";
    echo "<td>" . $row['status'] . "</td>";
    echo "<td>";
    echo "<form action='../controller/c_pemberiKerja_update.php' method='POST' onsubmit='return confirmAction()'>";
    echo "<input type='hidden' name='pelamar' value='" . $row['pelamar'] . "'>";
    echo "<input type='hidden' name='idpekerjaan' value='" . $row['idpekerjaan'] . "'>";
    echo "<button type='submit' name='status' value='DITERIMA' " . ($row['status'] != 'PENDING' ? 'disabled' : '') . ">Terima</button>";
    echo "</form>";
    echo "</td>";
    echo "<td>";
    echo "<form action='../controller/c_pemberiKerja_update.php' method='POST' onsubmit='return confirmAction()'>";
    echo "<input type='hidden' name='pelamar' value='" . $row['pelamar'] . "'>";
    echo "<input type='hidden' name='idpekerjaan' value='" . $row['idpekerjaan'] . "'>";
    echo "<button type='submit' name='status' value='DITOLAK' " . ($row['status'] != 'PENDING' ? 'disabled' : '') . ">Tolak</button>";
    echo "</form>";
    echo "</td>";
    echo "</tr>";
}
?>

<script>
    function confirmAction() {
        return confirm("Apakah Anda yakin ingin melanjutkan?");
    }
</script>

            

        </tbody>
    </table>

  

</body>

</html>