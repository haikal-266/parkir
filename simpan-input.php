<?php

    include('koneksi.php');

    $id                 = $_POST['id'];
    $plat_nomer         = $_POST['plat_nomer'];
    $jenis_kendaraan    = $_POST['jenis_kendaraan'];
    $jam_masuk          = $_POST['jam_masuk'];
    $jam_keluar         = $_POST['jam_keluar'];

    $query = "INSERT INTO tbl_parkir (id, plat_nomer, jenis_kendaraan, jam_masuk, jam_keluar) VALUES ('$id', '$plat_nomer','$jenis_kendaraan', '$jam_masuk', '$jam_keluar')";

    if ($connection->query($query)) {
        header("location: index.php");
    }
    else {
        echo "gagal disimpan";
    }

?>