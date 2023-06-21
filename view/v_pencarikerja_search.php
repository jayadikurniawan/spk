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
                <th>Perusahaan</th>
                <th>Posisi </th>
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
            $query = "SELECT * FROM listpekerjaan";
            $stmt = $mysqli->prepare($query);
            $stmt->execute();

            // Ambil semua data dan tampilkan dalam tabel
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['perusahaan'] . "</td>";
                echo "<td>" . $row['posisi'] . "</td>";
                echo "<td>" . $row['gaji'] . "</td>";
                echo "<td>";
                echo "<form action='v_pencarikerja_apply.php' method='GET'>";
                echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                echo "<button type='submit'>Apply</button>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
            ?>


        </tbody>
    </table>

    <!-- Tombol Add Pekerjaan -->

</body>

</html>