<?php
   include 'koneksi.php';

   $email = $_POST['email'];
   $password = $_POST['password'];

   $cek = "SELECT * FROM akun WHERE email = '$email' AND password = '$password'";
   $msql = mysqli_query($koneksi, $cek);
   $result = mysqli_fetch_assoc($msql);

   if(!empty($email) && !empty($password)){
    if($result !== NULL){
        // Login berhasil, kirim data akun
        $response['status'] = 'success';
        $response['message'] = 'Selamat Datang';
        $response['id_akun'] = $result['id_akun'];
        $response['username'] = $result['username'];
        $response['email'] = $result['email'];
        $response['nama'] = $result['nama'];
        $response['nohp'] = $result['nohp'];

        echo json_encode($response);
    } else {
        // Login gagal
        $response['status'] = 'failed';
        $response['message'] = 'Login gagal';
        echo json_encode($response);
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Ada data yang masih kosong';
    echo json_encode($response);
}
?>