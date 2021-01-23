<?php include '../komponen/head.php' ?>

<main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Halaman Data Area</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../komponen/index.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><span>Tabel</span></li>
                                <li class="breadcrumb-item active"><span>Area</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Header End -->

            <!-- Main Content Start -->
            <section class="main--content">
                <div class="row gutter-20">
                    <div class="col-md-12">
                        <!-- Panel Start -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Tabel Data Area</h3>
                            </div>
                            
                            <br><br>
                            <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Area</th>
                                        <th>Titik Koordinat</th>
                                        
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Area</th>
                                        <th>Titik Koordinat</th>
                                        
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php 
                                    $no =1;
                                        $sql = mysqli_query($koneksi,"SELECT id_area, idkel, ST_AsText(the_geom) AS titik FROM area_kecelakaan ") or die(mysqli_error($koneksi));
                                        while($dt = mysqli_fetch_array($sql)){
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <?php $datakel=mysqli_query($koneksi, "SELECT * FROM kelurahan WHERE idkel='$dt[idkel]'") or die(mysqli_error($koneksi)); 
                                            $dt2=mysqli_fetch_array($datakel);
                                            echo "<td>$dt2[namakel]</td>"
                                        ?>
                                        <td><?php echo $dt['titik'] ?></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        </div>
                        <!-- Panel End -->
                    </div>
                </div>
            </section>
            <!-- Main Content End -->

            <!-- Main Footer Start -->
            <?php include '../komponen/footer.php' ?>
            <!-- Main Footer End -->
        </main>

