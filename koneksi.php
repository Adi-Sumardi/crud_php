<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "crud_menu";
    $koneksi = mysqli_connect($host, $user, $pass, $db);


    if(!$koneksi) {
        die("Koneksi gagal ke database: ".mysql_connect_error());
    }

?>