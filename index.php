<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Parkir</title>
  </head>

  <body>

  <!-- Navbar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PARKINISME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="input.php">Input</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Tampil Data</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>

  <!-- Navbar End  -->

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA PARKIR
            </div>
            <div class="card-body">
              <a href="input.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <a href="/parkir/login/logout.php" class="btn btn-md btn-danger" style="margin-bottom: 10px">LOG OUT</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">PLAT NOMER</th>
                    <th scope="col">JENIS KENDARAAN</th>
                    <th scope="col">JAM MASUK</th>
                    <th scope="col">JAM KELUAR</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">UPDATE</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include('koneksi.php');

                      $query = mysqli_query($connection,"SELECT * FROM tbl_parkir");
                      while($row = mysqli_fetch_array($query)){
                  ?>


                  <tr class="text-center">      
                      <td><?php echo $row['plat_nomer'] ?></td>
                      <td><?php echo $row['jenis_kendaraan'] ?></td>
                      <td><?php echo $row['jam_masuk'] ?></td>
                      <td><?php echo $row['jam_keluar'] ?></td>
                      <td><img src="simpen-gambar/<?php echo $row['gambar'] ?>" width="150px" heigth="100px" ></td>
                      <td class="text-center">
                        <a href="jam-keluar.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">KELUAR</a>
                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-warning">EDIT</a>
                        <a href="hapus.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger"> HAPUS</a>
                      </td>
                  </tr> 
                  <?php } ?>
                </tbody>
              </table>
              <hr>
                <div class="card-header">JUMLAH KENDARAAN TERPAKIR</div>
                <div class="tabel-jumlah">
                <?php
                    include('koneksi.php');
                      $jmlh = mysqli_query($connection,"SELECT COUNT(jenis_kendaraan) FROM tbl_parkir WHERE jam_keluar='0000-00-00 00:00:00'");
                      while($ris = mysqli_fetch_array($jmlh)){
                  ?>

                    <table class="table table-bordered" id="">
                          <tr class="text-center">
                            <td>TERCATAT SEDANG PARKIR:</td>
                          </tr>
                          <tr>
                            <td class="font-weight-bold text-center"><?php echo implode(" Kendaraan Sedang Terparkir | Total Kendaraan Di Parkiran = ", $ris); ?></td>
                          </tr>
                         <?php } ?>
                    </table>
                </div>
            </div>
          </div>
          <br><br>  
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
