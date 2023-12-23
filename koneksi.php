<?php
    $hostname = "localhost";
    $username = "id21683488_root";
    $password = "Sandinya123!";
    $dbname = "id21683488_lensshare";

    $koneksi = mysqli_connect($hostname, $username, $password, $dbname);

    if(!$koneksi){
        echo "koneksi gagal";
    }