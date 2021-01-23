<?php include '../../config.php' ?>
<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ==== Document Title ==== -->
    <title>SIG Daerah Rawan Kecelakan</title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="../../assets/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="../../assets/css/morris.min.css">
    <link rel="stylesheet" href="../../assets/css/select2.min.css">
    <link rel="stylesheet" href="../../assets/css/jquery-jvectormap.min.css">
    <link rel="stylesheet" href="../../assets/css/horizontal-timeline.min.css">
    <link rel="stylesheet" href="../../assets/css/weather-icons.min.css">
    <link rel="stylesheet" href="../../assets/css/dropzone.min.css">
    <link rel="stylesheet" href="../../assets/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="../../assets/css/ion.rangeSlider.skinFlat.min.css">
    <link rel="stylesheet" href="../../assets/css/datatables.min.css">
    <link rel="stylesheet" href="../../assets/css/fullcalendar.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">

    
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>

   <style>
        #mapid {height: 560px; width:82em}
   </style>

    
</head>
<body>

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Navbar Start -->
        <header class="navbar navbar-fixed">
            <!-- Navbar Header Start -->
            <div class="navbar--header">
                <!-- Logo Start -->
                <a href="index.php" class="logo">
                   <p> <h4>Admin</h4></p>
                </a>
                <!-- Logo End -->

                <!-- Sidebar Toggle Button Start -->
                <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- Sidebar Toggle Button End -->
            </div>
            <!-- Navbar Header End -->

            <!-- Sidebar Toggle Button Start -->
            <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                <i class="fa fa-bars"></i>
            </a>
            <!-- Sidebar Toggle Button End -->

            <!-- Navbar Search Start -->
           
        </header>
        <!-- Navbar End -->

        <!-- Sidebar Start -->
        <aside class="sidebar" data-trigger="scrollbar">
            <!-- Sidebar Profile Start -->
            <div class="sidebar--profile">
                <div class="profile--img">
                    <a href="profile.html">
                        <img src="../../assets/img/polisi.png" alt="" class="rounded-circle">
                    </a>
                </div>
                <div class="profile--name">
                    <a href="#"><h5></h5></a>
                </div>

            </div>
            <!-- Sidebar Profile End -->

            <!-- Sidebar Navigation Start -->
            <div class="sidebar--nav">
                <ul>
                    <li>
                        <ul>
                            <li class="active">
                                <a href="../komponen/index.php">
                                    <i class="fa fa-home"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="far fa-newspaper"></i>
                                    <span>Data Master</span>
                                </a>

                                <ul>
                                    <li><a href="../akun/index.php">Data Akun</a></li>
                                    <li><a href="../desa/index.php">Data Kelurahan</a></li>
                                    <li><a href="../faskes/index.php">Data Fasilitas Kesehatan</a></li>
                                    <li><a href="../laka/index.php">Data Kecelakaan</a></li>
                                    <li><a href="../jenis/index.php">Data Jenis Rawan</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </li>
                        <ul>
                            <li>
                                <a href="../webgis/index.php">
                                    <i class="fa fa-map"></i>
                                    <span>Maps</span>
                                </a>
                            </li>
                            </ul>
                            <ul>
                            <li>
                                <a href="../../logout.php">
                                    <i class="fa fa-sign-out-alt"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
</div>
                <!-- Sidebar Navigation End -->

            <!-- Sidebar Widgets End -->
        </aside>
        <!-- Sidebar End -->
