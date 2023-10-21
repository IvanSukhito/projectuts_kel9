<?php

include 'koneksi.php';


$nik = $_GET['nik'];

$getData = "SELECT * FROM performance where nik=$nik limit 1";
$query = mysqli_query($connection, $getData);
$data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script>
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    </script>
    <title>Document</title>
</head>
<body>
    <div class="container card mt-5">
<form action="logicadd.php" method="post" class="row g-3" onSubmit="return simpan();" enctype="multipart/form-data">

    <h2>Form View </h2>
  <div class="col-md-6" >
    
    <label for="inputtanggal_penelian" class="form-label">Tanggal Penilaian</label>
    <input type="date" name="tgl_penilaian" class="form-control" id="inputtgl_penilaian" value="<?php echo $data['tgl_penilaian'];?>" disabled>
  </div>

  <div class="col-md-6"> 
    <label for="inputNik" class="form-label">Nik</label required>
    <input type="text" class="form-control" name="nik" value="<?php echo $data['nik'];?>" id="inputNik" disabled>
  </div>


  <div class="col-md-6">
    <label for="inputNama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name='nama' value="<?php echo $data['nik'];?>"  disabled>
  </div>


  <div class="col-md-6">
    <label for="inputState" class="form-label">Status Kerja</label>
    <select id="status_kerja" class="form-select" name='status_kerja'>
        <?php 
        if($data['status_kerja'] == 'Tetap'){
            echo "<option readonly>Tetap</option>";
        }else{
            echo "<option readonly>TidakTetap</option>";
        }
        ?>
    </select>
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Posisi</label>
    <input type="text" class="form-control" id="inputPosisi"name='position' value="<?php echo $data['position'];?>" disabled>
  </div>
  <div class="col-md-6"> 
    <label for="inputNik" class="form-label">Responsibility</label required>
    <input type="text" class="form-control" name="responsibility" id="inputResponsibility" value="<?php echo $data['responsibility'];?>" disabled>
  </div>
  <div class="col-md-3">
    <label for="inputZip" class="form-label">Teamwork</label>
    <input type="text" class="form-control" id="inputTeamwork" name='teamwork' value="<?php echo $data['teamwork'];?>" disabled>
</div>
<div class="col-md-3">
    <label for="inputZip" class="form-label">Management Time</label>
    <input type="text" class="form-control" id="inputManageTime"name='management_time' value="<?php echo $data['management_time'];?>" disabled>
</div>
<div class="col-md-3">
  
    <label for="inputZip" class="form-label">Grade</label>
    <input type="text" class="form-control" id="inputGrade" name='grade' value="<?php echo $data['grade'];?>" disabled>

</div>

<div class="col-12" >
    
    <label for="inputtanggal_penelian" class="form-label">Foto</label>
    <input type="file" name="foto" class="form-control" id="inputtgl_penilaian" required>
  </div>


<div class="col-12 mt-5 mb-5">
  
  
    <a href="index.php"><button type="button" class="btn btn-danger">Cancel</button></a>
  
</div>

</form>

</div>
</body>

<script>
function simpan(){
    if(confirm('Are you sure want to save?'))
    return true;
    else 
    return false;
}
</script>
</html>