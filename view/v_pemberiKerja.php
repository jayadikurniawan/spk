<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Pemberi Kerja</title>
    <!-- Tambahkan CSS Bootstrap -->

    <!-- Tambahkan CSS Anda di sini -->
    <style>
        /* CSS tambahan Anda */
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-light sidebar">
                <h2>M   enu</h2>
                <ul class="nav flex-column">
                  
                    <li class="nav-item">
                        <a class="nav-link" href="manage.php">Manage Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list.php">List Applicants</a>
                    </li>
                  
                </ul>
            </div>

            <div class="col-10">
                <h2>Dashboard Pemberi Kerja</h2>
                <!-- Konten halaman dashboard pemberi kerja -->
            </div>
        </div>
        <button onclick="window.location.href='../controller/c_logout.php'" class="tombol">logout</button>

    </div>
</body>
</html>
