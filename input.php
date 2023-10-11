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
             Informasi kendaraan
            </div>
            <div class="card-body">
              <form action="simpan-input.php" method="POST">
                
                <div class="form-group">
                  <label>No. Plat Kendaraan</label>
                  <input type="text" name="plat_nomer" placeholder="Masukan Plat Nomer Kendaraan" class="form-control">
                </div>

                <label class="form-group" for="">Jenis Kendaraan</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Mobil" name="jenis_kendaraan" id="flexRadioDefault1"> 
                    <label class="form-check-label" for="flexRadioDefault1">
                        Mobil
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Motor" name="jenis_kendaraan" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Motor
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Yang Lainya" name="jenis_kendaraan" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Yang Lainya
                    </label>
                </div>

                <br>

                <div class="form-group">
                  <label>Jam Masuk</label>
                  <input type="datetime-local" name="jam_masuk" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Jam Keluar</label>
                  <input type="datetime-local" name="jam_keluar" class="form-control">
                </div>

                <br>

                <button type="submit" class="btn btn-success">SIMPAN</button>
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