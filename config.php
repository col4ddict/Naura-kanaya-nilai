<?php
$host = 'localhost';
$userdb = 'root';
$passdb = '';
$db = 'pesat10_nilai';

//Procedural Style
$con = mysqli_connect($host, $userdb, $passdb, $db);  
// Check connection
if (mysqli_connect_errno()) {
    echo "Kesalahan pada koneksi MySQL: " . mysqli_connect_error();
    exit();
}

?>