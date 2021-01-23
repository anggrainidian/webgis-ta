<?php
include '../../config.php';
include 'function.php'; 

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
                    <?php
                            $kd_data = $_GET['kd_data'];
                            $query = mysqli_query($koneksi, "SELECT waktu, jumlah_korban, kendaraan_terlibat, status_korban, ST_AsText(the_geom) AS teks FROM data_laka WHERE kd_data='$kd_data'");
                            while ($data = mysqli_fetch_assoc($query)){
                                $teks = GeomToText($data['teks']);
                                $waktu =$data['waktu'];
                                $jml_korban = $data['jumlah_korban'];
                                $kendaraan = $data['kendaraan_terlibat'];
                                $status = $data['status_korban'];

                               
                                echo "<p>Terjadi kecelakaan kira-kira pada titik koordinat $data[teks] pada $data[waktu], dengan jumlah korban $data[jumlah_korban] orang, dan korban mengalami $data[status_korban]</p>";
                               
                            }
                            ?>     
                    </div>
                    <div class="body"> 
                    <a href="index.php" class="btn g-bg-blue waves-effect m-b-15" role="button"  > KEMBALI </a>
                    
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


     <!-- Main Footer End -->
        </main>

