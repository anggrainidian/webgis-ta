<?php include '../komponen/head.php' ?>
<main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Halaman Tambah Data Kecelakaan</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../komponen/index.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><span>Form</span></li>
                                <li class="breadcrumb-item active"><span>Kecelakaan</span></li>
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
                                <h3 class="panel-title">Form Tambah Data</h3>
                            </div>
                            <div class="panel-content">
                                <!-- Form Group Start -->
                                <form class="" id="" method="POST" action="aksi.php" enctype="multipart/form-data">
                        <div class="form-group form-float">
                            <div class="form-line">
                            <span class="label-text ">Kelurahan</span>
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
                            <div class="form-line">
                                <span class="label-text ">File Input</span>
                                <div class="col-md-10">
                                <label class="custom-file">
                                    <input type="file" name="foto" class="custom-file-input">
                                    <span class="custom-file-label">Pilih File</span>
                                    <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                                </label>
                                </div>
                            </div>
                            <br>
                            <div class="col-sm-6">
                                <div class="form-line">
                                    <input type="date" class="form-control" name="waktu">
                                </div>
                             </div>
                            <br>
                            <div class="form-line">
                                 <span class="label-text ">Status Korban</span>
                                <input type="text" class="form-control" name="status_korban">
                            </div>
                            <br>
                            <div class="form-line">
                                <span class="label-text ">Jumlah Korban</span>
                                <input type="text" class="form-control" name="jumlah_korban">
                            </div>
                            <br>
                            <div class="form-line">
                                <span class="label-text ">Kendaraan Terlibat</span>
                                <input type="text" class="form-control" name="kendaraan_terlibat">
                            </div>
                            <br>
                            <div class="form-line">
                                <span class="label-text ">Titik Koordinat</span>
                                <input type="text" class="form-control" name="the_geom">
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit" name="save">SIMPAN</button>
                        <a href="../laka/index.php"><button type="button" class="btn btn-default">BATAL</button></a>
                    </form>
                                <!-- Form Group End -->
                    <?php
                        // if(isset($_POST["save"])){

                        //     $id_area = $_POST['id_area'];
                        //     $waktu = $_POST['waktu'];
                        //     $status_korban = $_POST['status_korban'];
                        //     $jumlah_korban = $_POST['jumlah_korban'];
                        //     $kendaraan_terlibat = $_POST['kendaraan_terlibat'];
                        //     $the_geom = $_POST['the_geom'];
                                
                        //     $query= mysqli_query($koneksi, "INSERT INTO data_laka 
                        //     (id_area, waktu,status_korban,jumlah_korban,kendaraan_terlibat, the_geom) 
                        //     VALUES ('$id_area', '$waktu','$status_korban','$jumlah_korban','$kendaraan_terlibat', 
                        //     ST_GeomFromText('POINT($the_geom)',4326))") or die(mysqli_error($koneksi));
                        
                        //     echo "<script language='javascript'>alert('Data Berhasil Ditambahkan'); document.location='../laka/index.php';</script>";
                        // }
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