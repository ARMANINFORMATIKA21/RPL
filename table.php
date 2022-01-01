
<?php
$host = '127.0.0.1';
$user = 'username';
$pass = 'password';
$db = 'nama_database';
$connect = new mysqli($host,$user,$pass,$db);
$sql = "CREATE TABLE username(id INT AUTO_INCREMENT primary key, name varchar(100))";
if(mysqli_query($connect, $sql)){
  echo "Tabel Berhasil Dibuat";
}
?>
