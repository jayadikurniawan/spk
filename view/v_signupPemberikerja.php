<!-- signup_form.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Signup Form</title>
</head>
<body>
    <h2>Signup Form</h2>
    <form action="../controller/c_signupPemberi.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="telepon">Telepon:</label>
        <input type="text" id="telepon" name="telepon" required><br><br>
        
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required><br><br>
        
        <input type="submit" value="Signup">
    </form>
</body>
</html>
