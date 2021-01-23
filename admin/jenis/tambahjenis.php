<?php include '../komponen/head.php' ?>
<main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Halaman Tambah Jenis Kerawanan</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../komponen/index.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><span>Form</span></li>
                                <li class="breadcrumb-item active"><span>Jenis Kerawanan</span></li>
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
                        <form class="" method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <span class="label-text ">Jenis Kerawanan</span>
                                <input type="text" class="form-control" name="jenis">
                            </div>
                            <div class="form-line">
                                <span class="label-text ">Warna</span>
                                <input type="text" class="form-control" name="warna">
                                
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit" name="save">SIMPAN</button>
                        <a href="../jenis/index.php"><button type="button" class="btn btn-default">BATAL</button></a>
                    </form>
                                <!-- Form Group End -->
                                <hr>
                <?php
                    if(isset($_POST['save'])){
                        $kdjenis = $_POST['kdjenis'];
                        $jenis = $_POST['jenis'];
                        $warna = $_POST['warna'];
                    
                        $cek = mysqli_query($koneksi, "SELECT * FROM jenis_rawan WHERE kdjenis='$kdjenis'") or die(mysqli_error($koneksi));

                        if(mysqli_num_rows($cek) == 0){
                            $sql = mysqli_query($koneksi, "INSERT INTO jenis_rawan(jenis, warna) VALUES('$jenis', '$warna')") or die(mysqli_error($koneksi));

                            if($sql){
                                echo '<script>alert("Data Berhasil Ditambahkan"); document.location="../jenis/index.php";</script>';
                            }else{
                                echo '<div class="alert alert-warning">Gagal Melakukan Proses Tambah Data</div>';
                            }
                        }
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