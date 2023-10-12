<?php

    include('koneksi.php');


    $jam_keluar = $_POST['jam_keluar'];
    $id = $_POST['id'];

    $query = "UPDATE tbl_parkir SET jam_keluar = '$jam_keluar' where id = '$id'";

    if ($connection->query($query)) {
        header("location: index.php");
    }

?>