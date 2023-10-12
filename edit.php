<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tbl_parkir WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>kendaraan masuk</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
             Edit Informasi kendaraan
            </div>
            <div class="card-body">
              <form action="simpan-edit.php" method="GET">
                
                <div class="form-group">
                  <label>No. Plat Kendaraan</label>
                  <input type="hidden" name="id" value="<?php echo $id ?>"></input>
                  <input type="text" name="plat_nomer" value="<?php echo $row['plat_nomer'] ?>" class="form-control"></input>
                </div>

                <label class="form-group" for="">Jenis Kendaraan</label>
                <div class="form-check">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input class="form-check-input" name="jenis_kendaraan" type="radio" value="Mobil" name="jenis_kendaraan" id="flexRadioDefault1"> 
                    <label class="form-check-label" for="flexRadioDefault1">
                        Mobil
                    </label>
                </div>
                <div class="form-check">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input class="form-check-input" name="jenis_kendaraan" type="radio" value="Motor" name="jenis_kendaraan" id="flexRadioDefault1"> 
                    <label class="form-check-label" for="flexRadioDefault1">
                        Motor
                    </label>
                </div>
                <div class="form-check">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input class="form-check-input" name="jenis_kendaraan" type="radio" value="Yang Lainya" name="jenis_kendaraan" id="flexRadioDefault1"> 
                    <label class="form-check-label" for="flexRadioDefault1">
                        Yang Lainya
                    </label>
                </div>

                <br>

                <button type="submit" class="btn btn-success">EDIT</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>