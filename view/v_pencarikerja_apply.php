<!DOCTYPE html>
<html>

<head>
    <title>Halaman Tujuan</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <?php

    echo "<table>";
    echo "<tr><th>ID</th><th>Perusahaan</th><th>Posisi</th><th>Gaji</th></tr>";

    foreach ($data as $row) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['perusahaan'] . "</td>";
        echo "<td>" . $row['posisi'] . "</td>";
        echo "<td>" . $row['gaji'] . "</td>";
        echo "</tr>";
        echo "<td>";
        echo "<form action='acception.php' method='POST'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<input type='hidden' name='perusahaan' value='" . $row['perusahaan'] . "'>";
        echo "<input type='hidden' name='posisi' value='" . $row['posisi'] . "'>";
        echo "<button type='submit'>Apply</button>";
        echo "</form>";
        echo "</td>";
    }

    echo "</table>";
    ?>
</body>

</html>