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
                echo "<td><button onclick='konfirmasiTerima()'>Terima</button></td>";
                echo "<td><button onclick='konfirmasiTolak()'>Tolak</button></td>";
                echo "</tr>";
            }   
            ?>

        </tbody>
    </table>

  
<script>
function konfirmasiTerima() {
    if (confirm("Apakah Anda yakin ingin menerima?")) {
        // Jika pengguna memilih "Yes"
        // Lakukan sesuatu, misalnya kirim data ke halaman lain atau jalankan fungsi tertentu
        // ...
        window.location.href = "c_pencarikerja_update.php?pelamar=" + pelamar + "&idpekerjaan=" + idpekerjaan;
    }
}

function konfirmasiTolak() {
    if (confirm("Apakah Anda yakin ingin menolak?")) {
        // Jika pengguna memilih "Yes"
        // Lakukan sesuatu, misalnya kirim data ke halaman lain atau jalankan fungsi tertentu
        // ...
        
    } else {
        // Jika pengguna memilih "No"
        // Kembali ke halaman sebelumnya atau lakukan sesuatu yang diperlukan
        // ...
    }
}
</script>
</body>

</html>