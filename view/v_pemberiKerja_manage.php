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

            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row['posisi'] . "</td>";
                echo "<td>" . $row['tanggalPosting'] . "</td>";
                echo "<td>" . $row['gaji'] . "</td>";
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

    <!-- Tombol Add Pekerjaan -->
    <button id="addJobButton">Add Pekerjaan</button>
    <div id="jobFormContainer" style="display: none;">
        <h2>Add Pekerjaan</h2>
        <form id="jobForm" action="manage.php" method="POST">
            <input type="text" name="posisi" placeholder="Posisi" required><br>
            <input type="text" name="gaji" placeholder="Gaji" required><br>
            <textarea name="deskripsi" placeholder="Deskripsi" required></textarea><br>
            <input type="text" name="alamat" placeholder="Alamat" required><br>
            <input type="date" name="tanggalPosting" required><br>
            <input type="text" name="penerimaan" placeholder="Penerimaan" required><br>
            <input type="text" name="id" placeholder="ID" required><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <script>
        document.getElementById('addJobButton').addEventListener('click', function() {
            document.getElementById('jobFormContainer').style.display = 'block';
        });
    </script>
    


    <!-- Tambahkan JavaScript Anda di sini -->
    <script>
        // JavaScript Anda
    </script>
</body>

</html>