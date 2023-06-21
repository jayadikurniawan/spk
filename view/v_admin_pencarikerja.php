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
    <h1>List pencari Kerja</h1>
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
            <?php
            require "../controller/c_admin.php";

            $controller = new c_admin();
            $data = $controller->getListPencariKerja();

            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td><button id=\"$row[username]\">edit</button></td>";
                echo "<td><button id=\"$row[username]d\" onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>hapus</button></td>";
                echo "
                    <script>
                        document.getElementById(\"$row[username]\").addEventListener(\"click\", function() {
                            window.location.href = \"v_admin_pencarikerja_edit.php?id=$row[username]\";
                        });
                    </script>
                ";

                echo "
                    <script>
                        document.getElementById(\"$row[username]d\").addEventListener(\"click\", function() {
                            window.location.href = \"v_admin_pencarikerja_hapus.php?id=$row[username]\";
                        });
                    </script>
                ";
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

    <!-- Tombol Add Pekerjaan -->

</body>

</html>