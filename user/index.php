<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Beranda - Selamat Datang di Sistem Informasi Geografis</title>
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
            <a class="navbar-brand" href="index.html">WEBGIS Daerah Rawan Kecelakaan</a>
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
       
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Kecamatan Pelaihari</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="demo" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>
                        
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/images/image-gallery/home.jpg" width="1000px" height="500px"/>
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/image-gallery/keselamatan.png" alt="" width="1000px" height="500px" />
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/image-gallery/13.jpg" alt="" width="1000px" height="500px"/>
                                </div>
                            </div>
                        
                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
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

</script>
</body>
</html>