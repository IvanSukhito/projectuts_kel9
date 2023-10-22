<?php

include 'koneksi.php';


session_start();
// Create Logic
if(isset($_POST['submit'])){
    $nik            = trim($_POST['nik']);
    $nama           = trim($_POST['nama']);
    $status_kerja   = trim($_POST['status_kerja']);
    $position       = $_POST['position'];
    $tgl_penilaian  = $_POST['tgl_penilaian'];
    $responsibility = $_POST['responsibility'];
    $teamwork       = $_POST['teamwork'];
    $management_time= $_POST['management_time'];

    $total = $_POST['total'];
    $grade = $_POST['grade'];
    $fotoOld = $_POST['foto_old'];

    $foto  = $_FILES['foto'];
    $dir = "admin/image/";
    $target_dir = $dir . basename($foto['name']);
    $extension = pathinfo($foto['name'], PATHINFO_EXTENSION);
    $file_hash = bin2hex(random_bytes(16));
    // Logic uplaod photo

    $new_foto_name = "";
    if (!empty($_FILES['foto']['name'])) {  

      unlink($dir.$fotoOld);  
      $new_foto_name = $file_hash . '.' . $extension;
      move_uploaded_file( $foto['tmp_name'], __DIR__ . "/". $dir . $new_foto_name );

  }else{
    $new_foto_name = $fotoOld;
  }

    // Upload to User-Img folder
  
    // Store to database
    $sSQL   = "UPDATE performance
               SET nik=$nik, nama='$nama', foto='$new_foto_name', status_kerja='$status_kerja', position='$position', tgl_penilaian='$tgl_penilaian', responsibility='$responsibility', teamwork='$teamwork', management_time='$management_time', total='$total', grade='$grade'
               WHERE nik='$nik'";
    $result = mysqli_query($connection, $sSQL);
    if ($result) 
    $_SESSION["suksesEdit"] = 'Data Berhasil Diedit';
    header("location:form-add-employee.php");

} else {
    die("Akses Dilarang");
}

// Total Function

