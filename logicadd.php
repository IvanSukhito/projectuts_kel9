<?php

include 'koneksi.php';

if(isset($_POST['submit'])){

    $nik=  trim($_POST['nik']);
    $foto= $_POST['foto'];
    $nama=  trim($_POST['nama']);
    $status_kerja= trim($_POST['status_kerja']);
    $position=  $_POST['position'];
    $tgl_penilaian= $_POST['tgl_penilaian'];
    $responsibility= $_POST['responsibility'];
    $teamwork=$_POST['teamwork'];
    $management_time= $_POST['management_time'];
    $total= $_POST['total'];
    $grade = $_POST['grade'];
    
   var_dump($tgl_penilaian);
 
    $sSQL="";
    $sSQL="
        INSERT INTO `performance`(`nik`, `foto`, `nama`,`status_kerja`, `position`, `tgl_penilaian`,`responsibility`, `teamwork`, `management_time`
        ,`total`, `grade`)
            VALUES ('$nik','$foto','$nama','$status_kerja','$position','$tgl_penilaian','$responsibility','$teamwork','$management_time','$total','$grade')";
   
    $result = mysqli_query($connection,$sSQL);
    if ($result)
       header("location:index.php");
}else{
    die("Akses Dilarang");
}


?>