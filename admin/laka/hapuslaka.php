<?php include '../komponen/head.php' ?>

<?php 
    $kd_data = $_POST['kd_data'];
    $query = mysqli_query($koneksi, "SELECT * FROM data_laka WHERE kd_data='$_GET[kd_data]'");
    $hasil = mysqli_fetch_assoc($query);

        mysqli_query($koneksi, "DELETE FROM data_laka WHERE kd_data='$_GET[kd_data]'");
        echo "<script language='javascript'>alert('Data Dihapus'); document.location='../laka/index.php';</script>";

?>