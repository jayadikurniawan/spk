<?php
$username = $data["username"];
$password = $data["password"];
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

        <button type="submit" id="submit" name="submit">Submit</button>

    </form>

</body>

</html>