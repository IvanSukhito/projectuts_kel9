<?php 

include 'koneksi.php';

session_start();

if(isset($_GET['nik'])) {
  $nik = $_GET['nik'];

  $sSQL   = "DELETE FROM performance WHERE nik='$nik'";
  $result = mysqli_query($connection, $sSQL);
  if ($result) 
  header("location:form-add-employee.php");
  $_SESSION["sukses"] = 'Data Berhasil Dihapus';
  
} else {
  die("Akses Dilarang");
}