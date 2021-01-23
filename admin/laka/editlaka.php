<?php include '../komponen/head.php' ?>

<?php 
    $kd_data = $_GET['kd_data'];
    $query=mysqli_query($koneksi, "SELECT kd_data, id_area, waktu,status_korban,jumlah_korban,kendaraan_terlibat, ST_AsText(the_geom)
     AS titik FROM data_laka WHERE kd_data = '$kd_data'") or die (mysqli_error($koneksi));
    $dt= mysqli_fetch_assoc($query); ?>

<main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Halaman Ubah Data Kelurahan</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../komponen/index.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><span>Form Edit</span></li>
                                <li class="breadcrumb-item active"><span>Data Kelurahan</span></li>
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
                                <form class="" id="sign_in" method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group form-float">
                        <div class="form-line">
                        <label class="form-label"><b>Area</b></label>
                                <select class="form-control show-tick" name="id_area">
                                        <option value="">-- Please select --</option>
                                        <?php $sql = mysqli_query($koneksi,"SELECT * FROM area_kecelakaan") or die(mysqli_error($koneksi)); 
                                            while ($desa = mysqli_fetch_array($sql)) {
                                        ?>
                                             <option value="<?php echo $desa['id_area'] ?>" <?php echo $dt['id_area'] == $desa['id_area'] ? 'selected' : null ; ?>><?php echo $desa['id_area'] ?></option>
                                        <?php
                                            }
                                        ?>  
                                    </select>
                                </div>
                                <br>
                            <div class="form-line">
                            <label class="form-label"><b>Waktu*</b></label>
                                <input type="date" class="form-control" name="waktu" value="<?php echo $dt['waktu']?>">
                                <br>
                            </div>
                            <div class="form-line">
                            <label class="form-label"><b>Status Korban</b></label>
                                <input type="text" class="form-control" name="status_korban" value="<?php echo $dt['status_korban']?>">
                            </div>
                            <br>
                            <div class="form-line">
                            <label class="form-label"><b>Jumlah Korban</b></label>
                                <input type="text" class="form-control" name="jumlah_korban" value="<?php echo $dt['jumlah_korban']?>">
                            </div>
                            <br>
                            <div class="form-line">
                            <label class="form-label"><b>Kendaraan Terlibat</b></label>
                                <input type="text" class="form-control" name="kendaraan_terlibat" value="<?php echo $dt['kendaraan_terlibat']?>">
                            </div>
                            <br>
                            <div class="form-line">
                            <label class="form-label"><b>Titik Koordinat</b></label>
                                <input type="text" class="form-control" name="the_geom" value="<?php echo $dt['titik']?>">
                            </div>
                        </div>
                        <button class="btn btn-info" type="submit" name="ubah">Ubah</button>
                        <a href="../laka/index.php"><button type="button" class="btn btn-default">BATAL</button></a>
                    </form>
                                <!-- Form Group End -->
                                <hr>
                                
                               <!-- Form Group End -->
            <?php
                if (isset($_POST["ubah"]))
                {
                    $waktu = $_POST['waktu'];
                    $status_korban = $_POST['status_korban'];
                    $jumlah_korban = $_POST['jumlah_korban'];
                    $kendaraan_terlibat = $_POST['kendaraan_terlibat'];
                    $titik = $_POST['the_geom'];
                    
                    $query= mysqli_query($koneksi, "UPDATE data_laka SET 
                    waktu='$_POST[waktu]', status_korban='$_POST[status_korban]', jumlah_korban='$_POST[jumlah_korban]', kendaraan_terlibat='$_POST[kendaraan_terlibat]', the_geom='$_POST[titik]' WHERE kd_data='$kd_data'") or die (mysqli_error($koneksi));
            
                    //echo "<script language='javascript'>alert('Data Berhasil Di Ubah'); document.location='../laka/index.php';</script>";

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