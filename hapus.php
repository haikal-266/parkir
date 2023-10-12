<?php

    include('koneksi.php');

    $id = $_GET['id'];

    $query = "DELETE FROM tbl_parkir WHERE id = '$id'";

    if ($connection->query($query)) {
        header("location: index.php");
    }

?>