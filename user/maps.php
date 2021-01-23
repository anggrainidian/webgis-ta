<?php
        // $id_area = $_GET['id_area'];
    // include '../config.php';
    //         $query = mysqli_query($koneksi, "SELECT id_area, ST_X(ST_Centroid(the_geom)) AS lng, ST_Y(ST_Centroid(the_geom)) AS lat,
    //         ST_AsText(the_geom) AS teks, namakel FROM area_kecelakaan NATURAL JOIN kelurahan");
    //         $data = mysqli_fetch_array($query);
    //         $lat = $data['lat'];
    //         $lng = $data['lng'];
    //         $namakel = $data['namakel'];
    //         $teks = GeomToText($data['teks']);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Sistem Informasi Geografis</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/morrisjs/morris.css"/>

<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/hm-style.css">
<link rel="stylesheet" href="assets/css/all-themes.css" />

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>

   <style>
       #mapid { height: 560px;}
   </style>

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
            <a class="navbar-brand" href="index.php">Webgis Daerah Rawan Kecelakaan</a>
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
                    <h2>Polygon Map</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Maps</a></li>
                        <li class="breadcrumb-item active">Polygon Map</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                            <a href="../user/faskes.php" class="btn btn-raised btn-success btn-sm">Fasilitas Kesehatan</a>
                            <br><br>
                        <div id="mapid" class=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="assets/plugins/jquery-countto/jquery.countTo.js"></script> <!-- Jquery CountTo Plugin Js --> 

<script src="assets/bundles/flotscripts.bundle.js"></script><!-- Flot Charts Plugin Js --> 
<script src="assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js --> 

<script src="assets/bundles/mainscripts.bundle.js"></script> 
 <script src="assets/js/pages/index2.js"></script>
<script>
/*global $ */

</script>
</body>
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>

   <script>
    <?php
    include '../config.php';
    
    include '../admin/webgis/function.php'; 
       $query = mysqli_query($koneksi, "SELECT ST_X(ST_Centroid(the_geom)) AS lng,ST_Y(ST_Centroid(the_geom)) AS lat FROM area_kecelakaan");

       $data = mysqli_fetch_array($query);
       $lat = $data['lat'];
       $lng = $data['lng'];
       ?>
    
       var mymap = L.map('mapid').setView([<?php echo $lat ?>, <?php echo $lng ?>], 11);
       L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
}).addTo(mymap);

    <?php
    $query = mysqli_query($koneksi, "SELECT id_area, ST_AsText(the_geom) AS teks, warna FROM area_kecelakaan NATURAL JOIN jenis_rawan");
    while ($data = mysqli_fetch_array($query)){
        $id_area = $data['id_area'];
        $teks = GeomToText($data['teks']);
        $warna = $data['warna'];

        echo "var polygon = L.polygon([$teks], {color:'$warna'}).addTo(mymap);";
        echo "polygon.url = 'marker.php?id_area=$id_area';";
           echo "polygon.on('click', function(){window.location=(this.url); });";
    }
    ?>

   </script>
</html>