<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style.css" /> 
    <title>Home</title>
    <!-- Font Link-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
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

    <div class="main--content">
      <div class="header--wrapper">
        <div class="header--title">
          <h2>Healthy Food</h2>
        </div>
        <div class="user--info">
          <div class="search--box">
            <i class="fa-solid fa-search"></i>
            <input type="text" placeholder="Search" />
          </div>
          <img src="admin/image/profile.png" />
        </div>
      </div>
      <div class="database--container">
        <h3 class="main--title">Database</h3>
        <div class="database--wrapper">
          <div class="database--card1">
            <div class="card--header">
              <div class="amount">
                <span class="title"> Jumlah Karyawan </span>
                <span class="current--date">
                  <?php 
                    $currentDate = date("d-m-Y");
                    echo $currentDate;
                  ?>
                </span>
              </div>
              <i class="fas fa-user-friends"></i>
            </div>
            <span class="tetap">Tetap 
              <span class="titik1">:
                <span> 
                  <?php 
                     include('koneksi.php');
                      $query = "SELECT * FROM performance WHERE status_kerja = 'Tetap'";
                      $resultQuery = $connection->query($query);
                      
                      if($resultQuery){
                        $jumlahKaryawan = $resultQuery->num_rows;
                        if($jumlahKaryawan > 0 ){
                          echo $jumlahKaryawan;
                        }else{
                          echo "0";
                        }
                      }
                     ?>
                </span>
            </span>
          </span>
          <span class="tetap">Tidak Tetap <span class="titik">:
              <span>
              <?php 
                     include('koneksi.php');
                      $query = "SELECT * FROM performance WHERE status_kerja = 'Tidak Tetap'";
                      $resultQuery = $connection->query($query);
                      
                      if($resultQuery){
                        $jumlahKaryawan = $resultQuery->num_rows;
                        if($jumlahKaryawan > 0 ){
                          echo $jumlahKaryawan;
                        }else{
                          echo "0";
                        }
                      }
                     ?>
              </span>
            </span> 
          </span>
        </div>

          <div class="database--card">
            <div class="card--header">
              <div class="amount">
                <span class="title">Hasil Performance Karyawan Tetap</span>
                <span class="current--date"><br>Tahun: 
                <span>
                <?php 
                    $currentYear = date("Y");
                    echo $currentYear;
                  ?>
                </span>
              </span>
              </div>
            </div>
            <span class="tetap">A<span class="titik1">: 
            <span>
            <?php 
                     include('koneksi.php');
                      $query = "SELECT * FROM performance WHERE grade = 'A' AND status_kerja = 'Tetap'";
                      $resultQuery = $connection->query($query);
                      
                      if($resultQuery){
                        $jumlahKaryawan = $resultQuery->num_rows;
                        if($jumlahKaryawan > 0 ){
                          echo $jumlahKaryawan;
                        }else{
                          echo "0";
                        }
                      }
                     ?>
              </span>
            </span>
          </span>
            <span class="tetap">B<span class="titik1">:
            <span>
            <?php 
                     include('koneksi.php');
                      $query = "SELECT * FROM performance WHERE grade = 'B' AND status_kerja = 'Tetap'";
                      $resultQuery = $connection->query($query);
                      
                      if($resultQuery){
                        $jumlahKaryawan = $resultQuery->num_rows;
                        if($jumlahKaryawan > 0 ){
                          echo $jumlahKaryawan;
                        }else{
                          echo "0";
                        }
                      }
                     ?>
              </span>
            </span>
          </span>
            <span class="tetap">C<span class="titik1">:</span>
            <?php 
                     include('koneksi.php');
                      $query = "SELECT * FROM performance WHERE grade = 'C' AND status_kerja = 'Tetap'";
                      $resultQuery = $connection->query($query);
                      
                      if($resultQuery){
                        $jumlahKaryawan = $resultQuery->num_rows;
                        if($jumlahKaryawan > 0 ){
                          echo $jumlahKaryawan;
                        }else{
                          echo "0";
                        }
                      }
                     ?>
                     </span>
            <span class="tetap">D<span class="titik1">:</span>
            <?php 
                     include('koneksi.php');
                      $query = "SELECT * FROM performance WHERE grade = 'D' AND status_kerja = 'Tetap'";
                      $resultQuery = $connection->query($query);
                      
                      if($resultQuery){
                        $jumlahKaryawan = $resultQuery->num_rows;
                        if($jumlahKaryawan > 0 ){
                          echo $jumlahKaryawan;
                        }else{
                          echo "0";
                        }
                      }
                     ?>
          </span>
            
          </div>

          <div class="database--card">
            <div class="card--header">
              <div class="amount">
                <span class="title">Hasil Performance Karyawan Tidak Tetap </span>
                <span class="current--date">Tahun: 
                <?php 
                    $currentYear = date("Y");
                    echo $currentYear;
                  ?>
                </span>
              </div>
            </div>
            <span class="tetap">A<span class="titik1">:</span>
            <?php 
                     include('koneksi.php');
                      $query = "SELECT * FROM performance WHERE grade = 'A' AND status_kerja = 'Tidak Tetap'";
                      $resultQuery = $connection->query($query);
                      
                      if($resultQuery){
                        $jumlahKaryawan = $resultQuery->num_rows;
                        if($jumlahKaryawan > 0 ){
                          echo $jumlahKaryawan;
                        }else{
                          echo "0";
                        }
                      }
                     ?></span>
            <span class="tetap">B<span class="titik1">:</span>
            <?php 
                     include('koneksi.php');
                      $query = "SELECT * FROM performance WHERE grade = 'B' AND status_kerja = 'Tidak Tetap'";
                      $resultQuery = $connection->query($query);
                      
                      if($resultQuery){
                        $jumlahKaryawan = $resultQuery->num_rows;
                        if($jumlahKaryawan > 0 ){
                          echo $jumlahKaryawan;
                        }else{
                          echo "0";
                        }
                      }
                     ?></span>
            <span class="tetap">C<span class="titik1">:</span>
            <?php 
                     include('koneksi.php');
                      $query = "SELECT * FROM performance WHERE grade = 'C' AND status_kerja = 'Tidak Tetap'";
                      $resultQuery = $connection->query($query);
                      
                      if($resultQuery){
                        $jumlahKaryawan = $resultQuery->num_rows;
                        if($jumlahKaryawan > 0 ){
                          echo $jumlahKaryawan;
                        }else{
                          echo "0";
                        }
                      }
                     ?></span>
            <span class="tetap">D<span class="titik1">:</span>
            <?php 
                     include('koneksi.php');
                      $query = "SELECT * FROM performance WHERE grade = 'D' AND status_kerja = 'Tidak Tetap'";
                      $resultQuery = $connection->query($query);
                      
                      if($resultQuery){
                        $jumlahKaryawan = $resultQuery->num_rows;
                        if($jumlahKaryawan > 0 ){
                          echo $jumlahKaryawan;
                        }else{
                          echo "0";
                        }
                      }
                     ?></span>
          </div>
        </div>
      </div>
      <div class="table--wrapper">
        <h3 class="main--title">Karyawan Tetap dengan Performance C dan D    
           <?php 
             $currentDate = date("Y");
             echo $currentDate;
            ?>
        </h3>
        <div class="table--container">
            <table>
                <thead>
                    <tr>
                      <th>No</th>
                        <th>Foto</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Position</th>
                        <!-- <th>Aksi</th> -->
                    </tr>
                    <tbody>
                    <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM performance WHERE (grade = 'C' OR grade = 'D') AND status_kerja = 'Tetap'");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td>
                        <img src="admin/image/<?php echo $row['foto'] ?>" width="100px">
                      </td>
                      <td><?php echo $row['nik'] ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['position'] ?></td>
       
                  </tr>

                <?php } ?>
                </tbody>
                    </tbody>
                </thead>
            </table>
        </div>
      </div>

      <div class="table--wrapper">
        <h3 class="main--title">Karyawan Tidak Tetap dengan Performance C dan D    
           <?php 
             $currentDate = date("Y");
             echo $currentDate;
            ?>
        </h3>
        <div class="table--container">
            <table>
                <thead>
                    <tr>
                      <th>No</th>
                        <th>Foto</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Position</th>
                    </tr>
                    <tbody>
                    <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM performance WHERE (grade = 'C' OR grade = 'D') AND status_kerja = 'Tidak Tetap'");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td>
                        <img src="admin/image/<?php echo $row['foto'] ?>" width="100px">
                      </td>
                      <td><?php echo $row['nik'] ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['position'] ?></td>
                  </tr>

                <?php } ?>
                </tbody>
                    </tbody>
                </thead>
            </table>
        </div>
      </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>

  </body>
</html>
