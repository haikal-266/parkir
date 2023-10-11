<?php

    include('koneksi.php');

    $id = $_GET['id'];    
    $jam_keluar = $_POST['jam_keluar'];

    $query = "UPDATE tbl_parkir SET jam_keluar = '$jam_keluar' where id = 1";
    
    if ($connection->query($query)) {
        header("location: index.php");
    }

?>