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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

<?php session_start(); ?>
<div class="sidebar">
      <div class="logo"></div>
      <ul class="menu">
        <li class="active1">
          <a href="home.php">
            <i class="fas fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="active">
          <a href="form-add-employee.php">
            <i class="fas fa-database"></i>
            <span>Performance</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="container card mt-5">
<form action="logicadd.php" method="post" class="row g-3" enctype="multipart/form-data">


  <div class="col-md-6" >
    
    <label for="inputtanggal_penelian" class="form-label">Tanggal Penilaian</label>
    <input type="date" name="tgl_penilaian" class="form-control" id="inputtgl_penilaian" required>
  </div>

  <div class="col-md-6"> 
    <label for="inputNik" class="form-label">NIK</label required>
    <input type="text" class="form-control" name="nik" id="inputNik" placeholder="NIK" required>
  </div>


  <div class="col-md-6">
    <label for="inputNama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name='nama' required>
  </div>


  <div class="col-md-6">
    <label for="inputState" class="form-label">Status Kerja</label>
    <select id="status_kerja" class="form-select" name='status_kerja' required>
      <option selected disabled>Pilih Status Kerja...</option>
      <option value="Tetap">Tetap</option>
      <option value="Tidak Tetap">Tidak Tetap</option>
    </select>
  </div>

  <div class="col-md-6">
    <label for="inputPosisi" class="form-label">Posisi</label>

    <input type="text" class="form-control" id="inputPosisi"name='position' placeholder="Posisi" required>

  </div>
  <div class="col-md-6"> 
    <label for="inputNik" class="form-label">Responsibility</label required>
    <input type="text" class="form-control" name="responsibility" id="inputResponsibility" placeholder="Example: 90" required> 
  </div>
  <div class="col-md-3">
    <label for="inputZip" class="form-label">Teamwork</label>
    <input type="text" class="form-control" id="inputTeamwork" name='teamwork' placeholder="Example: 90" required>
  </div>
  <div class="col-md-3">
      <label for="inputZip" class="form-label">Management Time</label>
      <input type="text" class="form-control" id="inputManageTime" name='management_time' placeholder="Example : 80" required>
  </div>
  <div class="col-md-3" id="inputGrade">
  
    
</div>
<div class="col-md-3" id="inputTotal">
  
   

</div>

<div class="col-12" >
    
    <label for="inputtanggal_penelian" class="form-label">Foto</label>
    <input type="file" name="foto" class="form-control" id="inputtgl_penilaian" accept="image/png, image/gif, image/jpeg" required>
  </div>


<div class="col-12 mt-5 mb-5">
  
   <button type="submit" name ="submit" class="btn btn-primary" >Submit</button>
    <a href="home.php"><button type="button" class="btn btn-danger">Cancel</button></a>
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
                        <th>Status Kerja</th>
                        <th>Position</th>
                        <th>Total</th>
                        <th>Grade</th>
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
                      <td><?php echo $row['status_kerja'] ?></td>
                      <td><?php echo $row['position'] ?></td>
                      <td><?php echo $row['total'];?></td>
                      <td><?php echo $row['grade'];?></td>
                      <td class="text-center">
                        <a href="form-detail-employee.php?nik=<?php echo $row['nik'] ?>" class="btn btn-sm btn-info">VIEW</a>
                        <a href="form-edit-employee.php?nik=<?php echo $row['nik'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="logicdelete.php?nik=<?php echo $row['nik'] ?>"  class="btn btn-sm btn-danger alert_hapus">DELETE</a>
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
<!-- 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> -->
   
<script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>


<!-- Session Edit  -->
<?php if(@$_SESSION['suksesEdit']){ ?>
            <script>
                Swal.fire({            
                    icon: 'success',                   
                    title: 'Sukses',    
                    text: 'Data Berhasil Diedit',                        
                    timer: 1500,                                
                    showConfirmButton: false
                })
            </script>

<?php unset($_SESSION['suksesEdit']); } ?>

<!-- Session Add  -->
<?php if(@$_SESSION['suksesTambah']){ ?>
            <script>
                Swal.fire({            
                    icon: 'success',                   
                    title: 'Sukses',    
                    text: 'Data Berhasil Ditambahkan',                        
                    timer: 1500,                                
                    showConfirmButton: false
                })
            </script>

<?php unset($_SESSION['suksesTambah']); } ?>




<!-- Session Delete  -->
<?php if(@$_SESSION['sukses']){ ?>
            <script>
                Swal.fire({            
                    icon: 'success',                   
                    title: 'Sukses',    
                    text: 'Data Berhasil Dihapus',                        
                    timer: 1500,                                
                    showConfirmButton: false
                })
            </script>
<?php unset($_SESSION['sukses']); } ?>


  <!-- Sweet Alert  Delete -->
<script>

      $('.alert_hapus').on('click',function(){
                var getLink = $(this).attr('href');
                Swal.fire({
                    title: "Yakin hapus data?",            
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonColor: '#3085d6',
                    cancelButtonText: "Batal"
                
                }).then(result => {
                    if(result.isConfirmed){
                        window.location.href = getLink
                    }
                })
                return false;
            });
     
</script>

<script>

  var x;
  var y;
  var z;
  function total(x, y , z)
  {
    var total = (30 / 100 * x) + (30 / 100 * y) + (40 / 100 * z);
      return total;
  }

  function grade(x,y,z){
      var grade = total(x,y,z);
      if (grade >= 80 ) {
          return 'A';
      } else if (grade >= 60) {
          return 'B';
      } else if (grade >= 40) {
          return 'C';
      } else {
          return 'D';
      }
  }

$(document).ready(function(){
           
  
  //var a = document.getElementById("nama").value;
// let html = '';
// $('#inputTotal').empty();
// html =  ' <label for="inputTotal" class="form-label">Total</label>'+'<input type="text" class="form-control" id="inputTotal" name="inputTotal"  readonly>';
// $('#inputTotal').html(html);

function updateTotal() {
    var teamwork = $('#inputTeamwork').val();
    var managementtime = $('#inputManageTime').val();
    var respon = $('#inputResponsibility').val();

    console.log(teamwork);
    console.log(managementtime);
    hasil = total(respon, teamwork, managementtime);
    console.log(hasil);

    let html = '';
    html += '<label for="inputTotal" class="form-label">Total</label>';
    html += '<input type="text" class="form-control" id="inputTotal" name="total" value=' + hasil + ' readonly>';

    $('#inputTotal').empty().html(html);
}

 function updateGrade(){
  var teamwork = $('#inputTeamwork').val();
    var managementtime = $('#inputManageTime').val();
    var respon = $('#inputResponsibility').val();

 
    hasilGrade = grade(respon, teamwork, managementtime);
    console.log(hasilGrade);
    let html2 = '';
     html2 += '<label for="inputGrade" class="form-label">Grade</label>';
     html2 += '<input type="text" class="form-control" id="inputGrade" name="grade" value=' + hasilGrade+ ' readonly>';

     $('#inputGrade').empty().html(html2);
 }

$('input[name=management_time], input[name=teamwork], input[name=responsibility]').change(function() {
    updateTotal();
    updateGrade();
});


});

</script>
</html>