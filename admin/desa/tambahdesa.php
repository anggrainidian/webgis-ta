<?php include '../komponen/head.php' ?>
<main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Halaman Tambah Data Kelurahan</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../komponen/index.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><span>Form</span></li>
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
                                <h3 class="panel-title">Form Tambah Data</h3>
                            </div>
                            <div class="panel-content">
                                <!-- Form Group Start -->
                                <form class="" method="POST" action="" enctype="multipart/form-data">
                        <div class="form-line">
                            <span class="label-text ">Nama Desa/Kelurahan</span>
                            <input type="text" class="form-control" name="namakel">
                        </div>
                        <br>
                        <button class="btn btn-success" type="submit" name="save">SIMPAN</button>
                        <a href="../desa/index.php"><button type="button" class="btn btn-default">BATAL</button></a>
                    </form>
                                <!-- Form Group End -->
                                <hr>
            <?php
                if(isset($_POST['save'])){
                    $idkel = $_POST['idkel'];
                    $namakel = $_POST['namakel'];
                   
                    $cek = mysqli_query($koneksi, "SELECT * FROM kelurahan WHERE idkel='$idkel'") or die(mysqli_error($koneksi));

                    if(mysqli_num_rows($cek) == 0){
                        $sql = mysqli_query($koneksi, "INSERT INTO kelurahan(namakel) VALUES('$namakel')") or die(mysqli_error($koneksi));

                        if($sql){
                            echo '<script>alert("Data Berhasil Ditambahkan"); document.location="../desa/index.php";</script>';
                        }else{
                            echo '<div class="alert alert-warning">Gagal Menambahkan Data</div>';
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