<?php
include '../../config.php';
    
include '../../admin/webgis/function.php'; 
    //    $id_area = $_GET['id_area'];

    //    $query = mysqli_query($koneksi, "SELECT id_area, ST_X(ST_Centroid(the_geom)) AS lng, ST_Y(ST_Centroid(the_geom)) AS lat,
    //    ST_AsText(the_geom) AS teks, namakel FROM area_kecelakaan NATURAL JOIN kelurahan WHERE id_area= '$id_area'");
    //    $data = mysqli_fetch_array($query);
    //    $lat = $data['lat'];
    //    $lng = $data['lng'];
    //    $namakel = $data['namakel'];
    //    $teks = GeomToText($data['teks']);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: AdminCC - Bootstrap 4 Dashboard ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/plugins/morrisjs/morris.css"/>

<!-- Custom Css -->
<link rel="stylesheet" href="../assets/css/main.css">
<link rel="stylesheet" href="../assets/css/hm-style.css">
<link rel="stylesheet" href="../assets/css/all-themes.css" />

<link rel="stylesheet" href="../assets/dist/leaflet-routing-machine.css" />

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

<!-- Top Bar -->
<nav class="navbar">
    <div class="col-12">
        <div class="navbar-header">            
            <a href="javascript:void(0);" class="h-bars"></a>
            <a class="navbar-brand" href="index.php">WEBGIS Daerah Rawan Kecelakaan</a>
        </div>
    </div>
</nav>

<div class="menu-container">
    <div class="menu">
        <ul>
            <li><a href="../index.php">Beranda</a>
            </li>
            <li><a href="../user/maps.php">Peta</a>
            </li>
            <li><a href="../user/menu.php">Menu</a>
            </li>
            <!-- <li><a href="../user/maps.php">Peta</a>
            </li> -->
        </ul>
    </div>
</div>
<!-- Right Sidebar -->
<section class="content">    
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>JVector Map</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Maps</a></li>
                        <li class="breadcrumb-item active">Routing</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> EXAMPLE </h2>
                    </div>
                    <div class="body">
                        <div id="mapid" class=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jquery Core Js --> 
<script src="../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<script src="../assets/plugins/jquery-countto/jquery.countTo.js"></script> <!-- Jquery CountTo Plugin Js --> 

<script src="../assets/bundles/flotscripts.bundle.js"></script><!-- Flot Charts Plugin Js --> 
<script src="../assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js --> 

<script src="../assets/bundles/mainscripts.bundle.js"></script> 
 <script src="../assets/js/pages/index2.js"></script>
<script>
/*global $ */

</script>
</body>
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>

 <script src="../assets/dist/leaflet-routing-machine.js"></script>
 
   
 <script src="../../assets/js/js/geo.js" type="text/javascript" charset="utf-8"></script>
   <script>

    var mymap = L.map('mapid').setView([-3.769378,114.776576], 10);
       L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
}).addTo(mymap);

<?php
    $query = mysqli_query($koneksi, "SELECT id_faskes, nama_faskes, ST_AsText(the_geom) AS teks FROM faskes");
    while ($data = mysqli_fetch_array($query)){
        $nama = $data['nama_faskes'];
        $idfas = $data['id_faskes'];
        $teks = GeomToText($data['teks']);

        echo "var marker = L.marker($teks).addTo(mymap);";
        
    }
    ?>
    if(geo_position_js.init()){
			geo_position_js.getCurrentPosition(success_callback,error_callback,{enableHighAccuracy:true,options:5000});
		}
		else{
			alert("Functionality not available");
		}

		function success_callback(p)
		{
            var lat = p.coords.latitude;
            var lng = p.coords.longitude;
            L.Routing.control({
        waypoints: [
            L.latLng(lat, lng),
            L.latLng(-3.524181, 114.609113)
        ],
        routeWhileDragging: true
    }).addTo(mymap);
			// alert('lat='+.toFixed(2)+';lon='+.toFixed(2));
		}
		
		function error_callback(p)
		{
			alert('error='+p.message);
		}
    //rute
   

    // $getJSON('https://ipinfo.io/geo?token=a148508d2b2039', function(response){
    //     console.log(response);
    //     var loc = response.loc.split(',');
    //     var coords = {
    //         latitude: loc[0],
    //         longitude: loc[1],
    //     };
    //     tampilLokasi(coords)
        
    // });
    
    // function tampilLokasi(posisi) {
    //     //console.log(posisi);
    //     var latitude = posisi.latitude;
    //     var longitude = posisi longitude;
    //     $.ajax({
    //         type    : 'POST',
    //         url     : 'ambil_kordinat.php,
    //         data    : 'latitude='+latitude+'&longitude='+longitude,
    //         success : function (data) {
    //             var json = data,
    //             obj = JSON.parse(data);
    //             $('#latitude').val(obj.latitude);
    //             $('#longitude').val(obj.longitude);
    //         }
    //     })
    // }


   </script>
</html>