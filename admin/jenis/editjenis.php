<?php include '../komponen/head.php' ?>
<?php 
    $kdjenis = $_GET['kdjenis'];
    $query=mysqli_query($koneksi, "SELECT * FROM jenis_rawan WHERE kdjenis = '$kdjenis'");
    $dt= mysqli_fetch_assoc($query); ?>


<main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Halaman Ubah Data Jenis Kerawanan</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../komponen/index.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><span>Form Edit</span></li>
                                <li class="breadcrumb-item active"><span>Data Jenis Rawan</span></li>
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
                                <h3 class="panel-title">Form Edit Data</h3>
                            </div>
                            <div class="panel-content">
                                <!-- Form Group Start -->
                                <form class="" method="POST" action="" enctype="multipart/form-data">
                                <div class="form-group form-float">
                            <div class="form-line">
                            <label class="form-label"><b>Jenis Kerawanan</b></label>
                                <input type="text" class="form-control" name="jenis" value="<?php echo $dt['jenis']?>">
                            </div>
                            <br>
                            <div class="form-line">
                            <label class="form-label"><b>Warna</b></label>
                                <input type="text" class="form-control" name="warna" value="<?php echo $dt['warna']?>">
                            </div>
                            
                        </div>
                        <button class="btn btn-info" type="submit" name="ubah">Ubah</button>
                        <a href="../jenis/index.php"><button type="button" class="btn btn-default">BATAL</button></a>
                    </form>
                                <!-- Form Group End -->
                                <hr>
            <?php
                if (isset($_POST["ubah"]))
                {
                    $jenis = $_POST['jenis'];
                    
                    $query= mysqli_query($koneksi, "UPDATE jenis_rawan SET jenis='$_POST[jenis]' WHERE kdjenis='$dt[kdjenis]'");
            
                    echo "<script language='javascript'>alert('Data Berhasil Di Ubah'); document.location='../jenis/index.php';</script>";

                }
            ?>
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