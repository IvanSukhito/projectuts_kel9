<?php 

include 'koneksi.php';

if(isset($_POST['delete'])) {
  $nik = $_POST['nik'];

  $sSQL   = "DELETE FROM performance WHERE nik='$nik'";
  $result = mysqli_query($connection, $sSQL);
  if ($result) header("location:index.php");
} else {
  die("Akses Dilarang");
}