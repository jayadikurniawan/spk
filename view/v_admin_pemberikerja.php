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
    <h1>List Pemberi Kerja</h1>
    <h2>Data List Pekerjaan</h2>

    <!-- Tampilan data List Pekerjaan -->
    <table>
        <thead>
            <tr>
                <th>Nama Pekerjaan</th>
                <th>Tanggal </th>
                <th>Gaji</th>
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
            $query = "SELECT * FROM pemberiKerja";
            $stmt = $mysqli->prepare($query);
            $stmt->execute();

            // Ambil semua data dan tampilkan dalam tabel
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td><button>edit</button></td>";
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

    <!-- Tombol Add Pekerjaan -->

</body>

</html>