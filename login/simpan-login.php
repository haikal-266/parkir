<?php

session_start();

include('koneksi-login.php');

$username     = $_POST['username'];
$password      = MD5($_POST['password']);

//query
$query  = "SELECT * FROM tbl_login WHERE username='$username' AND password='$password'";
$result     = mysqli_query($connection, $query);
$num_row     = mysqli_num_rows($result);
$row         = mysqli_fetch_array($result);

if($num_row >=1) {
    
    echo "success";
    $_SESSION['username']       = $row['username'];

} else {
    
    echo "error";

}

?>