<?php

include 'koneksi.php';

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

    $total = total($_POST['responsibility'], $_POST['teamwork'], $_POST['management_time']);
    $grade = grade($_POST['responsibility'], $_POST['teamwork'], $_POST['management_time']);
    
    // Logic uplaod photo
    
    if ($_FILES['foto'] !== null) {  
      $foto  = $_FILES['foto'];
      $dir = "admin/image/";
      $target_dir = $dir . basename($foto['name']);
      $extension = pathinfo($foto['name'], PATHINFO_EXTENSION);
      $file_hash = bin2hex(random_bytes(16));
      $new_foto_name = $file_hash . '.' . $extension;
  }

    // Upload to User-Img folder
    move_uploaded_file( $foto['tmp_name'], __DIR__ . "/". $dir . $new_foto_name );

    // Store to database
    $sSQL   = "UPDATE performance
               SET nik=$nik, nama='$nama', foto='$new_foto_name', status_kerja='$status_kerja', position='$position', tgl_penilaian='$tgl_penilaian', responsibility='$responsibility', teamwork='$teamwork', management_time='$management_time', total='$total', grade='$grade'
               WHERE nik='$nik'";
    $result = mysqli_query($connection, $sSQL);
    if ($result) header("location:index.php");

} else {
    die("Akses Dilarang");
}

// Total Function
function total($responsibility, $teamwork, $management_time): float 
{
    $total = (30 / 100 * $responsibility) + (30 / 100 * $teamwork) + (40 / 100 * $management_time);
    return $total;
}

// Grade Function
function grade($responsibility, $teamwork, $management_time): string
{
    $total = total($responsibility, $teamwork, $management_time);

    if ($total >= 80 ) {
        return 'A';
    } elseif ($total >= 60) {
        return 'B';
    } elseif ($total >= 40) {
        return 'C';
    } else {
        return 'D';
    }
}