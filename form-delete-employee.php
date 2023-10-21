<?php
include 'koneksi.php';

    $nik = $_GET['nik'];
  
    $delete = "DELETE FROM performance WHERE nik=$nik";

  
    $query = mysqli_query($connection, $delete);
    // apakah query simpan berhasil?
    if( $query ) {
       // kalau berhasil alihkan ke halaman index.php dengan status=sukses
       header('Location: index.php?status=sukses');
   } else {
       // kalau gagal alihkan ke halaman indek.php dengan status=gagal
       header('Location: index.php?status=gagal');
   }

?>