<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style.css" /> 

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
          <a href="#">
            <i class="fas fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-database"></i>
            <span>Performance</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="main--content">
      <div class="header--wrapper">
        <div class="header--title">
          <h2>Healty Food</h2>
        </div>
        <div class="user--info">
          <div class="search--box">
            <i class="fa-solid fa-search"></i>
            <input type="text" placeholder="Search" />
          </div>
          <img src="profile.png" />
        </div>
      </div>
      <div class="database--container">
        <h3 class="main--title">Database</h3>
        <div class="database--wrapper">
          <div class="database--card1">
            <div class="card--header">
              <div class="amount">
                <span class="title"> Jumlah Karyawan </span>
                <span class="current--date">01-01-2003</span>
              </div>
              <i class="fas fa-user-friends"></i>
            </div>
            <span class="tetap">Tetap <span class="titik1">:</span> </span>
            <span class="tetap">Tidak Tetap <span class="titik">:</span> </span>
          </div>

          <div class="database--card">
            <div class="card--header">
              <div class="amount">
                <span class="title">Hasil Performance Karyawan Tetap</span>
                <span class="current--date"><br>Tahun: 2023</span>
              </div>
            </div>
            <span class="tetap">A<span class="titik1">:</span></span>
            <span class="tetap">B<span class="titik1">:</span></span>
            <span class="tetap">C<span class="titik1">:</span></span>
            <span class="tetap">D<span class="titik1">:</span></span>
          </div>

          <div class="database--card">
            <div class="card--header">
              <div class="amount">
                <span class="title">Hasil Performance Karyawan Tidak Cukup </span>
                <span class="current--date">Tahun: 2023</span>
              </div>
            </div>
            <span class="tetap">A<span class="titik1">:</span></span>
            <span class="tetap">B<span class="titik1">:</span></span>
            <span class="tetap">C<span class="titik1">:</span></span>
            <span class="tetap">D<span class="titik1">:</span></span>
          </div>
        </div>
      </div>
      <div class="table--wrapper">
        <h3 class="main--title">Karyawan Tetap dengan Performance C dan D 2023</h3>
        <div class="table--container">
            <table>
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Position</th>
                    </tr>
                </thead>
            </table>
        </div>
      </div>
    </div>
  </body>
</html>
