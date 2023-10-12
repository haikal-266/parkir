<?php
    include('koneksi.php');
    $query = "SELECT * FROM tbl_parkir";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>kendaraan keluar</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
             Input Jam Keluar
            </div>
            <div class="card-body">
              <form action="update-keluar.php" method="POST">
                
              <?php

                    $id = $_GET['id'];
                  
              ?>
                <div class="form-group">
                  <label>JAM KELUAR</label>
                  <input type="hidden" name="id" value="<?php echo $id ?>">
                  <input type="datetime-local" name="jam_keluar" value="<?php echo $row['jam_keluar'] ?>" class="form-control">
                </div>

                <br>

                <button type="submit" class="btn btn-success">UPDATE</button>
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




