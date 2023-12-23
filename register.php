<?php
    include 'koneksi.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $nohp = $_POST['nohp'];

    $queryRegister = "SELECT * FROM akun WHERE email = '".$email."'";

    $msql = mysqli_query($koneksi, $queryRegister);

    $result = mysqli_num_rows($msql);

    if (!empty($nama) && !empty($username) && !empty($email) && !empty($password) && !empty($nohp)){
        if($result == 0){
            $regis = "INSERT INTO `akun` (`id_akun`, `username`, `email`, `nama`, `password`, `nohp`) VALUES (NULL, '$username', '$email', '$nama', '$password', '$nohp')";

            $msqlRegis = mysqli_query($koneksi, $regis);

            echo "Daftar Berhasil";
        } else{
            echo "username sudah digunakan";
        }
    } else{
        echo "Semua data harus di isi dengan lengkap!";
    }