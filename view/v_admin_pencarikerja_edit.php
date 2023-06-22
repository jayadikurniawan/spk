<?php
$username = $data["username"];
$password = $data["password"];
$email = $data["email"];
$telepon = $data["telepon"];
$nama = $data["nama"];
$umur = $data["umur"];
$alamat = $data["alamat"];
$tanggallahir = $data["tanggallahir"];
$sex = $data["sex"];

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Update Program Kerja</h1>

    <form method="post" action="update_pencarikerja.php">
    <div class="div-table-col1">
        username
    </div>
    <div class="div-table-col2">
        <input type="text" id="noEdit" name="username" value="<?php echo $username ?>" readonly>
    </div>

    <div class="div-table-col1">
        password
    </div>
    <div class="div-table-col2">
        <input type="text" id="noProgram" name="password" value="<?php echo $password ?>" required>
    </div>

    <div class="div-table-col1">
        email
    </div>
    <div class="div-table-col2">
        <input type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
    </div>

    <div class="div-table-col1">
        telepon
    </div>
    <div class="div-table-col2">
        <input type="text" name="telepon" value="<?php echo isset($telepon) ? $telepon : ''; ?>">
    </div>

    <div class="div-table-col1">
        nama
    </div>
    <div class="div-table-col2">
        <input type="text" name="nama" value="<?php echo isset($nama) ? $nama : ''; ?>">
    </div>

    <div class="div-table-col1">
        umur
    </div>
    <div class="div-table-col2">
        <input type="text" name="umur" value="<?php echo isset($umur) ? $umur : ''; ?>">
    </div>

    <div class="div-table-col1">
        alamat
    </div>
    <div class="div-table-col2">
        <input type="text" name="alamat" value="<?php echo isset($alamat) ? $alamat : ''; ?>">
    </div>

    <div class="div-table-col1">
        tanggal lahir
    </div>
    <div class="div-table-col2">
        <input type="date" name="tanggallahir" value="<?php echo isset($tanggallahir) ? $tanggallahir : ''; ?>">
    </div>

    <div class="div-table-col1">
        sex
    </div>
    <div class="div-table-col2">
        <input type="text" name="sex" value="<?php echo isset($sex) ? $sex : ''; ?>">
    </div>

    <button type="submit" id="submit" name="submit">Submit</button>
</form>


</body>

</html>