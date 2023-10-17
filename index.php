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
                    <th scope="col">UPDATE</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include('koneksi.php');
                      $query = mysqli_query($connection,"SELECT * FROM tbl_parkir");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>      
                      <td><?php echo $row['plat_nomer'] ?></td>
                      <td><?php echo $row['jenis_kendaraan'] ?></td>
                      <td><?php echo $row['jam_masuk'] ?></td>
                      <td><?php echo $row['jam_keluar'] ?></td>
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