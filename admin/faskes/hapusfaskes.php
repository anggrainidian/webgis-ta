<?php include '../komponen/head.php' ?>

<?php 
    $id_faskes = $_POST['id_faskes'];
    $query = mysqli_query($koneksi, "SELECT * FROM faskes WHERE id_faskes='$_GET[id_faskes]'");
    $hasil = mysqli_fetch_assoc($query);

        mysqli_query($koneksi, "DELETE FROM faskes WHERE id_faskes='$_GET[id_faskes]'");
        echo "<script language='javascript'>alert('Data Dihapus'); document.location='../faskes/index.php';</script>";
?>