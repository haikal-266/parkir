<?php

    include('koneksi.php');

    $id                 = $_POST['id'];
    $plat_nomer         = $_POST['plat_nomer'];
    $jenis_kendaraan    = $_POST['jenis_kendaraan'];
    $jam_masuk          = $_POST['jam_masuk'];
    $jam_keluar         = $_POST['jam_keluar'];
    $gambar             = $_POST['gambar'];

    if(isset($_FILES['gambar'])) {
        $file_name = $_FILES['gambar']['name'];
        $file_tmp = $_FILES['gambar']['tmp_name'];
    
       
        $target_dir = "simpen-gambar/";
        $target_file = $target_dir . basename($file_name);
    
    
        if (move_uploaded_file($file_tmp, $target_file)) {
            echo "File berhasil diunggah.";
        } else {
            echo "Error: File tidak berhasil diunggah.";
        }
    } else {
        echo "Error: Tidak ada berkas yang diunggah.";
    }


    $query = "INSERT INTO tbl_parkir (id, plat_nomer, jenis_kendaraan, jam_masuk, jam_keluar, gambar) VALUES ('$id', '$plat_nomer','$jenis_kendaraan', '$jam_masuk', '$jam_keluar' , '$file_name')";

    if ($connection->query($query)) {
        header("location: index.php");
    }
    else {
        echo "gagal disimpan";
    }

?>