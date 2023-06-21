<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- signup.html -->
<form action="../controller/c_signupPencari.php" method="POST">
  <label for="username">Username:</label>
  <input type="text" name="username" id="username" required><br>

  <label for="password">Password:</label>
  <input type="password" name="password" id="password" required><br>

  <label for="email">Email:</label>
  <input type="email" name="email" id="email" required><br>

  <label for="telepon">Telepon:</label>
  <input type="text" name="telepon" id="telepon" required><br>

  <label for="nama">Nama:</label>
  <input type="text" name="nama" id="nama" required><br>

  <label for="umur">Umur:</label>
  <input type="number" name="umur" id="umur" required><br>

  <label for="alamat">Alamat:</label>
  <textarea name="alamat" id="alamat" required></textarea><br>

  <label for="tanggallahir">Tanggal Lahir:</label>
  <input type="date" name="tanggallahir" id="tanggallahir" required><br>

  <label for="sex">Jenis Kelamin:</label>
  <select name="sex" id="sex" required>
    <option value="Laki-laki">Laki-laki</option>
    <option value="Perempuan">Perempuan</option>
  </select><br>

  <input type="submit" value="Sign Up">
</form>

</body>
</html>