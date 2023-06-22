<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Pemberi Kerja</title>
    <style>
    </style>
</head>

<body>
    <h1>List pencari Kerja</h1>
    <h2>Data List Pekerjaan</h2>
    <table>
        <thead>
            <tr>
            <th>Username </th>
            <th>password </th>
            <th>Email </th>
            <th>Telepon </th>
            <th>Nama </th>
            <th>Umur </th>
            <th>Alamat </th>
            <th>Tanggal Lahir </th>
            <th>Sex </th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['telepon'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['umur'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row['tanggallahir'] . "</td>";
                echo "<td>" . $row['sex'] . "</td>";
                echo "<td><button id=\"$row[username]\">edit</button></td>";
                echo "<td><button id=\"$row[username]d\" onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>hapus</button></td>";
                echo "
                    <script>
                        document.getElementById(\"$row[username]\").addEventListener(\"click\", function() {
                            window.location.href = \"update_pencarikerja.php?id=$row[username]\";
                        });
                    </script>
                ";

                echo "
                    <script>
                        document.getElementById(\"$row[username]d\").addEventListener(\"click\", function() {
                            window.location.href = \"hapus_pencarikerja.php?id=$row[username]\";
                        });
                    </script>
                ";
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>
</body>

</html>