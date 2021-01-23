<?php include '../komponen/head.php' ?>

<?php 
    $idkel = $_POST['idkel'];
    $query = mysqli_query($koneksi, "SELECT * FROM kelurahan WHERE idkel='$_GET[idkel]'");
    $hasil = mysqli_fetch_assoc($query);

        mysqli_query($koneksi, "DELETE FROM kelurahan WHERE idkel='$_GET[idkel]'");
        echo "<script language='javascript'>alert('Data Dihapus'); document.location='../desa/index.php';</script>";
?>