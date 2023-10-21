<?php

include 'koneksi.php';

// Create Logic
if(isset($_POST['submit'])){
    $nik            = trim($_POST['nik']);
    $foto           = $_FILES['foto'];
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
    $dir = "admin/image/";
    $target_dir = $dir . basename($foto['name']);
    $extension = pathinfo($foto['name'], PATHINFO_EXTENSION);
    $file_hash = bin2hex(random_bytes(16));
    $new_foto_name = $file_hash . '.' . $extension;

    // Upload to User-Img folder
    move_uploaded_file( $foto['tmp_name'], __DIR__ . "/". $dir . $new_foto_name );

    // Store to database
    $sSQL   =" INSERT INTO `performance`(`nik`, `foto`, `nama`,`status_kerja`, `position`, `tgl_penilaian`,`responsibility`, `teamwork`, `management_time`,`total`, `grade`)
               VALUES ('$nik','$new_foto_name','$nama','$status_kerja','$position','$tgl_penilaian','$responsibility','$teamwork','$management_time','$total','$grade')";
    $result = mysqli_query($connection, $sSQL);
    if ($result) header("location:home.php");

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