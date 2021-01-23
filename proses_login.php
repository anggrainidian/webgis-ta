<?php
include "config.php";

if(isset($_POST["login"])){
    $username = $_POST['username'];
    $password = MD5($_POST['password']);

    $sql = mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$username' AND password='$password'") or die(mysqli_error($koneksi));
    $cek = mysqli_num_rows($sql);

    if($cek>0){
        $dt = mysqli_fetch_array($sql);
        if($dt['level'] == 'admin'){
            echo "<script language='javascript'>document.location='admin/komponen/index.php';</script>";

        }
    }
}

?>