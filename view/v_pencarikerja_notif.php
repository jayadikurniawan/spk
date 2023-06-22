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

            <?php

            
            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row['perusahaan'] . "</td>";
                echo "<td>" . $row['posisi'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

  
</body>

</html>