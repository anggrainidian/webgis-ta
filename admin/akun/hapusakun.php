<?php include '../komponen/head.php' ?>

<?php 
    $id_akun = $_POST['id_akun'];
    $query = mysqli_query($koneksi, "SELECT * FROM akun WHERE id_akun='$_GET[id_akun]'");
    $hasil = mysqli_fetch_assoc($query);

        mysqli_query($koneksi, "DELETE FROM akun WHERE id_akun='$_GET[id_akun]'");
        echo "<script language='javascript'>alert('Data Dihapus'); document.location='../akun/index.php';</script>";
?>