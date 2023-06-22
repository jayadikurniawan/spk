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

            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row['pelamar'] . "</td>";
                echo "<td>" . $row['posisi'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                
                echo "<td>";
                echo "<form action='profile.php' method='POST'>";
                echo "<input type='hidden' name='pelamar' value='" . $row['pelamar'] . "'>";
                echo "<input type='hidden' name='status' value='" . $row['status'] . "'>";
                echo "<input type='hidden' name='idpekerjaan' value='" . $row['idpekerjaan'] . "'>";
                echo "<button type='submit' name='detail'>Detail</button>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
            ?>

            



        </tbody>
    </table>



</body>

</html>