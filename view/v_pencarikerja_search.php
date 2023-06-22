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
    <form action="../page_pencarikerja/search.php" method="GET">
        <input type="text" name="keyword" placeholder="Cari kata kunci...">
        <button type="submit">Cari</button>
    </form>
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

            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row['perusahaan'] . "</td>";
                echo "<td>" . $row['posisi'] . "</td>";
                echo "<td>" . $row['gaji'] . "</td>";
                echo "<td>";
                echo "<form action='apply.php' method='GET'>";
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