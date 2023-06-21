<!-- signup_process.php -->
<?php
require '../model/m_konek.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$tanggallahir = $_POST['tanggallahir'];
$sex = $_POST['sex'];

$query = "INSERT INTO `pencarikerja`(`username`, `password`, `email`, `telepon`, `nama`, `umur`, `alamat`, `tanggallahir`, `sex`) VALUES ('$username','$password','$email','$telepon','$nama','$umur','$alamat','$tanggallahir','$sex')";

if ($mysqli->query($query)) {
  header("Location: ../index.php");
  echo "Data inserted successfully.";
} else {
  echo "Error: " . $mysqli->error;
}

$mysqli->close();

?>
