<?php
include '../../config.php';
include 'function.php'; 
        $id_area = $_GET['id_area'];

        $query = mysqli_query($koneksi, "SELECT id_area, ST_X(ST_Centroid(the_geom)) AS lng, ST_Y(ST_Centroid(the_geom)) AS lat,
        ST_AsText(the_geom) AS teks, namakel FROM area_kecelakaan NATURAL JOIN kelurahan WHERE id_area= '$id_area'");
        $data = mysqli_fetch_array($query);
        $lat = $data['lat'];
        $lng = $data['lng'];
        $namakel = $data['namakel'];
        $teks = GeomToText($data['teks']);

?>

<?php include '../komponen/head.php' ?>

<main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Webgis Daerah Rawan Kecelakaan</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item"><span>Leaflet</span></li>
                                <li class="breadcrumb-item active"><span>Daerah Rawan Kecelakaan</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Header End -->

            <!-- Main Content Start -->
            <section class="main--content">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Leaflet</h3>
                    </div>

                    <div class="panel-content">
                        <div class="table-responsive" id="mapid">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main Content End -->
             <!-- Main Footer Start -->
        <footer class="main--footer main--footer-light">
                <p>Copyright &copy; <a href="#">AnggrainiDianS</a>. Politala.</p>
            </footer>
            <!-- Main Footer End -->
        </main>
        <!-- Main Container End -->
    </div>
    <!-- Wrapper End -->

    <!-- Scripts -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/jquery-ui.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/jquery.sparkline.min.js"></script>
    <script src="../../assets/js/raphael.min.js"></script>
    <script src="../../assets/js/morris.min.js"></script>
    <script src="../../assets/js/select2.min.js"></script>
    <script src="../../assets/js/jquery-jvectormap.min.js"></script>
    <script src="../../assets/js/jquery-jvectormap-world-mill.min.js"></script>
    <script src="../../assets/js/horizontal-timeline.min.js"></script>
    <script src="../../assets/js/jquery.validate.min.js"></script>
    <script src="../../assets/js/jquery.steps.min.js"></script>
    <script src="../../assets/js/dropzone.min.js"></script>
    <script src="../../assets/js/ion.rangeSlider.min.js"></script>
    <script src="../../assets/js/datatables.min.js"></script>
    <script src="../../assets/js/main.js"></script>

      <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>

   <script>
    <?php
       echo "var mymap = L.map('mapid').setView([$lat, $lng], 13);";
       ?>

       L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
}).addTo(mymap);

    <?php
    $query = mysqli_query($koneksi, "SELECT kd_data, waktu, jumlah_korban, ST_AsText(the_geom) AS teks FROM data_laka WHERE id_area = '$id_area'");
    while($data = mysqli_fetch_array($query))
    {
        $teks = GeomToText($data['teks']);
        $kd_data = $data['kd_data'];
        $waktu = $data['waktu'];
        $jumlah_korban = $data['jumlah_korban'];

        echo "var marker = L.marker($teks).addTo(mymap);";
        echo "marker.url= 'detail.php?kd_data=$kd_data&id_area=$id_area';";
        echo "marker.on('click', function(){window.location=(this.url); });";
    }
    ?>

   </script>
     <!-- Main Footer End -->
        </main>

