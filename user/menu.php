<?php
    include "../config.php"
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Beranda - Selamat Datang Sistem Informasi Geografis</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/morrisjs/morris.css"/>

<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/hm-style.css">
<link rel="stylesheet" href="assets/css/all-themes.css" />

</head>

<body class="theme-deep-purple index2">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-cyan">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Search  -->
<div class="search-bar">
    <div class="search-icon"> <i class="zmdi zmdi-search"></i> </div>
    <input type="text" placeholder="Search...">
    <div class="close-search"> <i class="zmdi zmdi-close"></i> </div>
</div>

<!-- Top Bar -->
<nav class="navbar">
    <div class="col-12">
        <div class="navbar-header">            
            <a href="javascript:void(0);" class="h-bars"></a>
            <a class="navbar-brand" href="index.html">Webgis Daerah Rawan Kecelakaan</a>
        </div>
    </div>
</nav>

<div class="menu-container">
    <div class="menu">
        <ul>
            <li><a href="index.php">Beranda</a>
            </li>
            <li><a href="../user/maps.php">Peta</a>
            </li>
            <!-- <li><a href="../user/faskes.php">Fasilitas Kesehatan</a>
            </li> -->
            <li><a href="../user/menu.php">Menu</a>
            </li>
            
        </ul>
    </div>
</div>
<!-- Right Sidebar -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Dashboard</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="index.php">Beranda</a></li>
                        <li class="breadcrumb-item active">Menu User</li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-8 col-md-10 col-sm-10">
                <div class="card">
                    <div class="body">
                        <h2 class="card-inside-title"> Form Tambah Data</h2>
                        <form class="" id="" method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group form-float">
                            <div class="form-line">
                            <select class="form-control show-tick" name="id_area">
                                    <option value="">-- Please select --</option>
                                    <?php $sql = mysqli_query($koneksi,"SELECT id_area, idkel, namakel FROM area_kecelakaan NATURAL JOIN kelurahan") or die(mysqli_error($koneksi)); 
                                        while ($dt = mysqli_fetch_array($sql)) {
                                    ?>
                                         <option value="<?php echo $dt['id_area'] ?>"><?php echo $dt['namakel'] ?></option>
                                    <?php
                                        }
                                    ?>  
                                </select>
                            </div>
                            <br>
                            <div class="col-sm-6">
                                <div class="form-line">
                                    <input type="date" class="form-control" name="waktu">
                                    <label class="form-label"></label>
                                </div>
                             </div>
                            <br>
                            <div class="form-line">
                                <input type="text" class="form-control" name="status_korban">
                                <label class="form-label">Status Korban</label>
                            </div>
                            <br>
                            <div class="form-line">
                                <input type="text" class="form-control" name="jumlah_korban">
                                <label class="form-label">Jumlah Korban</label>
                            </div>
                            <br>
                            <div class="form-line">
                                <input type="text" class="form-control" name="kendaraan_terlibat">
                                <label class="form-label">Kendaraan Terlibat</label>
                            </div>
                            <br>
                            <div class="form-line">
                                <input type="text" class="form-control" name="the_geom">
                                <label class="form-label">Titik Koordinat</label>
                            </div>
                            <br>
                        </div>
                        <button class="btn btn-raised btn-primary waves-effect" type="submit" name="save">SIMPAN</button>
                        <a href="../laka/index.php"><button type="button" class="btn  btn-raised btn-warning waves-effect">BATAL</button></a>
                    </form>
            </div>
            <?php
            if(isset($_POST["save"])){

                $id_area = $_POST['id_area'];
                $waktu = $_POST['waktu'];
                $status_korban = $_POST['status_korban'];
                $jumlah_korban = $_POST['jumlah_korban'];
                $kendaraan_terlibat = $_POST['kendaraan_terlibat'];
                $the_geom = $_POST['the_geom'];
                    
                   $query= mysqli_query($koneksi, "INSERT INTO data_laka 
                   (id_area, waktu,status_korban,jumlah_korban,kendaraan_terlibat, the_geom) 
                   VALUES ('$id_area', '$waktu','$status_korban','$jumlah_korban','$kendaraan_terlibat', 
                   ST_GeomFromText('POINT($the_geom)',4326))") or die(mysqli_error($koneksi));
            
                   echo "<script language='javascript'>alert('Berhasil Menambahkan Data'); document.location='../user/index.php';</script>";
            }
            ?>
        </div>
            </div>
		</div> 
    </div>
</section>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> Lib Scripts Plugin Js 

<script src="assets/plugins/jquery-countto/jquery.countTo.js"></script> <!-- Jquery CountTo Plugin Js --> 

<script src="assets/bundles/flotscripts.bundle.js"></script><!-- Flot Charts Plugin Js --> 
<script src="assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script> 
 <script src="assets/js/pages/index2.js"></script>
<script>

</script>
</body>
</html>