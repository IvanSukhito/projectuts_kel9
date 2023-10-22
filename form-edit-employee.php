<?php 
include("koneksi.php");

$nik = $_GET['nik'];
$query = mysqli_query($connection,"SELECT * FROM performance WHERE nik='$nik'");
$data = mysqli_fetch_array($query);

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

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>


      <title>Form Edit Karyawan</title>

</head>
<body>
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
        <li class="active1">
          <a href="form-add-employee.php">
            <i class="fas fa-database"></i>
            <span>Performance</span>
          </a>
        </li>
      </ul>
    </div>
  <div class="container card mt-5">
    <form action="logicupdate.php" method="post" class="row g-3" enctype="multipart/form-data">
      <div class="col-md-6 mt-5" >
        <label for="inputtanggal_penelian" class="form-label">Tanggal Penilaian</label>
        <input type="date" name="tgl_penilaian" class="form-control" id="inputtgl_penilaian" required  value="<?php echo $data['tgl_penilaian'] ?>">
      </div>
      <div class="col-md-6 mt-5"> 
        <label for="inputNik" class="form-label">NIK</label>
        <input type="text" class="form-control" name="nik" id="inputNik" value="<?php echo $data['nik'] ?>" required>
      </div>
      <div class="col-md-6 mt-5">
        <label for="inputNama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Nama" name='nama' value="<?php echo $data['nama'] ?>" required>
      </div>
      <div class="col-md-6 mt-5">
        <label for="inputState" class="form-label">Status Kerja</label>
        <select id="status_kerja" class="form-select" name='status_kerja'>
          <option value="<?php echo $data['status_kerja'] ?>" selected><?php echo $data['status_kerja'] ?></option>
          <option value="Tetap">Tetap</option>
          <option value="Tidak Tetap">Tidak Tetap</option>
        </select>
      </div>
      <div class="col-md-6 mt-5">
        <label for="inputCity" class="form-label">Posisi</label>
        <input type="text" class="form-control" id="inputPosisi"name='position' value="<?php echo $data['position'] ?>" required>
      </div>
      <div class="col-md-6 mt-5"> 
        <label for="inputNik" class="form-label">Responsibility</label required>
        <input type="text" class="form-control" name="responsibility" id="inputResponsibility" value="<?php echo $data['responsibility'] ?>" required>
      </div>
      <div class="col-md-3 mt-5">
        <label for="inputZip" class="form-label">Teamwork</label>
        <input type="text" class="form-control" id="inputTeamwork" name='teamwork' value="<?php echo $data['teamwork'] ?>" required>
    </div>
    <div class="col-md-3 mt-5">
        <label for="inputZip" class="form-label">Management Time</label>
        <input type="text" class="form-control" id="inputManageTime" name='management_time' value="<?php echo $data['management_time'] ?>" required>
    </div>
    <div class="col-md-3 mt-5" id="inputGrade">
    <input type="hidden" value="<?php echo $data['grade'] ?>" id="getGrade">
  </div>
    <div class="col-md-3 mt-5" id="inputTotal">
    <input type="hidden" value="<?php echo $data['total'] ?>" id="getTotal">
    </div>
    <div class="col-12 mt-5" >
    
    <label for="Foto" class="form-label">Old Foto</label>
    <input type="text" name="foto_old" class="form-control" id="foto_old" value="<?php echo $data['foto'] ?>">
    
    <img src="admin/image/<?php echo $data['foto'] ?>" class="form-control" style="width:25%;"  >
  </div>
    <div class="col-12" >
      <label for="inputtanggal_penelian" class="form-label">Foto</label>
      <input type="file" name="foto" class="form-control" id="inputtgl_penilaian" accept="image/png, image/gif, image/jpeg">
    </div>
    <div class="col-12 mt-5 mb-5">
      <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
        <a href="form-add-employee.php"><button type="button" class="btn btn-danger">Cancel</button></a>
      <button type="reset" class="btn btn-info" >Clear</button>
    </div>
  </form>
</div>
</body>

<script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>




<script>
// function simpan(){
//     if(confirm('Are you sure want to update?'))
//     return true;
//     else 
//     return false;
// }
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
         var getTotal = $('#getTotal').val();
         var getGrade = $('#getGrade').val();
         
         let html = '';
             html += '<label for="inputTotal" class="form-label">Total</label>';
             html += '<input type="text" class="form-control" id="inputTotal" name="total" value=' + getTotal + ' readonly>';
         
          $('#inputTotal').html(html);
          let html2 = '';
             html2 += '<label for="inputGrade" class="form-label">Grade</label>';
              html2 += '<input type="text" class="form-control" id="inputGrade" name="grade" value=' + getGrade+ ' readonly>';
         
          $('#inputGrade').html(html2);

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
         
             $('#inputTotal').change().html(html);
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
         
              $('#inputGrade').change().html(html2);
          }
         
         $('input[name=management_time], input[name=teamwork], input[name=responsibility]').change(function() {
             updateTotal();
             updateGrade();
         });
         
         
         });
         
</script>
</html>