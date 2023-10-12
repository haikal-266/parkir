<?php

    include('koneksi.php');

    $id = $_GET['id'];
    $plat_nomer = $_GET['plat_nomer'];
    $jenis_kendaraan = $_GET['jenis_kendaraan'];

    $query = "UPDATE tbl_parkir SET plat_nomer = '$plat_nomer', jenis_kendaraan = '$jenis_kendaraan' WHERE id = '$id'";

    if ($connection->query($query)) {
        header("location: index.php");
    }

?>