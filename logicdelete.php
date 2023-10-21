<?php 

include 'koneksi.php';

if(isset($_GET['nik'])) {
  $nik = $_GET['nik'];

  $sSQL   = "DELETE FROM performance WHERE nik='$nik'";
  $result = mysqli_query($connection, $sSQL);
  if ($result) header("location:index.php");
} else {
  die("Akses Dilarang");
}