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
    <link rel="stylesheet" href="style.css" /> 

    <!-- font link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <script>
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    </script>

      <title>Form Add Karyawan</title>

</head>
<body>
<div class="sidebar">
      <div class="logo"></div>
      <ul class="menu">
        <li class="active">
          <a href="home.php">
            <i class="fas fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="active1">
          <a href="form-add-employee.php">
            <i class="fas fa-database"></i>
            <span>Performance</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="container card mt-5">
<form action="logicadd.php" method="post" class="row g-3" onSubmit="return simpan();" enctype="multipart/form-data">


  <div class="col-md-6" >
    
    <label for="inputtanggal_penelian" class="form-label">Tanggal Penilaian</label>
    <input type="date" name="tgl_penilaian" class="form-control" id="inputtgl_penilaian" required>
  </div>

  <div class="col-md-6"> 
    <label for="inputNik" class="form-label">Nik</label required>
    <input type="text" class="form-control" name="nik" id="inputNik">
  </div>


  <div class="col-md-6">
    <label for="inputNama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name='nama'>
  </div>


  <div class="col-md-6">
    <label for="inputState" class="form-label">Status Kerja</label>
    <select id="status_kerja" class="form-select" name='status_kerja'>
      <option selected>Pilih...</option>
      <option value="Tetap">Tetap</option>
      <option value="Tidak Tetap">Tidak Tetap</option>
    </select>
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Posisi</label>
    <input type="text" class="form-control" id="inputPosisi"name='position'>
  </div>
  <div class="col-md-6"> 
    <label for="inputNik" class="form-label">Responsibility</label required>
    <input type="text" class="form-control" name="responsibility" id="inputResponsibility">
  </div>
  <div class="col-md-3">
    <label for="inputZip" class="form-label">Teamwork</label>
    <input type="text" class="form-control" id="inputTeamwork" name='teamwork'>
</div>
<div class="col-md-3">
    <label for="inputZip" class="form-label">Management Time</label>
    <input type="text" class="form-control" id="inputManageTime"name='management_time'>
</div>
<div class="col-md-3">
  
    <label for="inputZip" class="form-label">Grade</label>
    <input type="text" class="form-control" id="inputGrade" name='grade'>

</div>

<div class="col-12" >
    
    <label for="inputtanggal_penelian" class="form-label">Foto</label>
    <input type="file" name="foto" class="form-control" id="inputtgl_penilaian" required>
  </div>


<div class="col-12 mt-5 mb-5">
  
   <button type="submit" name ="submit"class="btn btn-primary" >Submit</button>
    <a href="index.php"><button type="button" class="btn btn-danger">Cancel</button></a>
    <button type="reset" class="btn btn-info" >Clear</button>
</div>
</form>
<div class="table--container1">
            <table>
                <thead>
                    <tr>
                      <th>No</th>
                        <th>Foto</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <!-- <th>Status Kerja</th> -->
                        <th>Position</th>
                        <!-- <th>Total</th>
                        <th>Grade</th> -->
                        <th>Aksi</th>
                    </tr>
                    <tbody>
                    <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM performance");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td>
                        <img src="admin/image/<?php echo $row['foto'] ?>" width="100px">
                      </td>
                      <td><?php echo $row['nik'] ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <!-- <td>Tetap<td> -->
                      <td><?php echo $row['position'] ?></td>
                      <!-- <td>Total</td>
                      <td>Grade</td> -->
                      <td class="text-center">
                        <a href="form-detail-employee.php?nik=<?php echo $row['nik'] ?>" class="btn btn-sm btn-info">VIEW</a>
                        <a href="form-edit-employee.php?nik=<?php echo $row['nik'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="logicdelete.php?nik=<?php echo $row['nik'] ?>" onClick="return hapus();" class="btn btn-sm btn-danger">DELETE</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
                    </tbody>
                </thead>
            </table>
        </div>



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