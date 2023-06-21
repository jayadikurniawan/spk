<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-color: #fff;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    .login-container h2 {
      text-align: center;
    }

    .login-container input[type="text"],
    .login-container input[type="password"],
    .login-container select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .login-container input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4caf50;
      border: none;
      color: #fff;
      cursor: pointer;
      border-radius: 3px;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="controller/c_login.php" method="POST">
      <select name="userType" required>
        <option value="">Pilih Jenis Pengguna</option>
        <option value="admin">Admin</option>
        <option value="pencarikerja">Pencari Kerja</option>
        <option value="pemberikerja">Pemberi Kerja</option>
      </select>
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" value="Login">
    </form>
    
  <p>Don't have an account? <a href="v_signup.php">Sign up</a></p>

  </div>

</body>
</html>
