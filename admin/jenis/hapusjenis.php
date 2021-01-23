<?php include '../komponen/head.php' ?>

<?php include '../komponen/menu.php' ?>

<?php 
    $kd_jenis = $_POST['kd_jenis'];
    $query = mysqli_query($koneksi, "SELECT * FROM jenis_rawan WHERE kd_jenis='$_GET[kd_jenis]'");
    $hasil = mysqli_fetch_assoc($query);

        mysqli_query($koneksi, "DELETE FROM jenis_rawan WHERE kd_jenis='$_GET[kd_jenis]'");
        echo "<script language='javascript'>alert('Data Dihapus'); document.location='../jenis/index.php';</script>";

?>