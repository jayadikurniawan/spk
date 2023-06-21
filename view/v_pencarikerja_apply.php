<!DOCTYPE html>
<html>
<head>
    <title>Halaman Tujuan</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <?php
    require '../model/m_konek.php';

    // Ambil nilai id dari parameter GET
    $id = $_GET['id'];

    // Query SELECT dengan filter berdasarkan id
    $query = "SELECT * FROM listpekerjaan WHERE id = $id";
    $result = $mysqli->query($query);

    // Cek apakah terdapat hasil query
    if ($result->num_rows > 0) {
        // Tampilkan data dalam bentuk tabel
        echo "<table>";
        echo "<tr><th>ID</th><th>Perusahaan</th><th>Posisi</th><th>Gaji</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['perusahaan'] . "</td>";
            echo "<td>" . $row['posisi'] . "</td>";
            echo "<td>" . $row['gaji'] . "</td>";
            echo "</tr>";
            echo "<td>";
            echo "<form action='../controller/c_pencarikerja_apply.php' method='POST'>";
            echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
            echo "<input type='hidden' name='perusahaan' value='" . $row['perusahaan'] . "'>";
            echo "<input type='hidden' name='posisi' value='" . $row['posisi'] . "'>";
            echo "<button type='submit'>Apply</button>";
            echo "</form>";
            echo "</td>";
        }

        

        echo "</table>";

        
    } else {
        echo "Tidak ada data pekerjaan dengan ID tersebut.";
    }

    // Tutup koneksi database
    $mysqli->close();
    ?>
</body>
</html>
