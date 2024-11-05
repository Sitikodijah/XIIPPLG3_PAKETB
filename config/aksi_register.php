<?php 
include 'koneksi.php';
 
$username = $_POST['USERNAME'];
$password = $_POST['password'];
$email = $_POST['email'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$sql = mysqli_query($koneksi, "INSERT INTO user VALUES ('',' $username','$password','$email','$nama','$alamat')")

if ($sql) {
   echo "<scrip>
   alert ('pendaftaran akun berhasil');
   location.href='../login.php';
   </script>";
}

?>