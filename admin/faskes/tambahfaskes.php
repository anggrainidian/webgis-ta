<?php include '../komponen/head.php' ?>
<main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Halaman Tambah Data Fasilitas Kesehatan</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../komponen/index.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><span>Form</span></li>
                                <li class="breadcrumb-item active"><span>Fasilitas Kesehatan</span></li>
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
                                    <span class="label-text ">Kelurahan </span>
                                    <select class="form-control show-tick" name="idkel">
                                            <option value="">-- Please select --</option>
                                            <?php $sql = mysqli_query($koneksi,"SELECT * FROM kelurahan") or die(mysqli_error($koneksi)); 
                                                while ($dt = mysqli_fetch_array($sql)) {
                                            ?>
                                                <option value="<?php echo $dt['idkel'] ?>"><?php echo $dt['namakel'] ?></option>
                                            <?php
                                                }
                                            ?>  
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <span class="label-text ">Nama Fasilitas Kesehatan</span>
                                        <input type="text" class="form-control" name="nama_faskes">
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <span class="label-text ">Detail</span>
                                        <textarea class="form-control" name="detail" required="required"></textarea>
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
                                    <div class="form-line">
                                        <span class="label-text ">Titik Koordinat</span>
                                        <input type="text" class="form-control" name="the_geom">
                                    </div>
                                    <br>
                                   
                        </div>
                        <button class="btn btn-success" type="submit" name="save">SIMPAN</button>
                        <a href="../faskes/index.php"><button type="button" class="btn btn-default">BATAL</button></a>
                    </form>
                                <!-- Form Group End -->
                    <?php
                        // if(isset($_POST['save'])){
                        //     $idkel	 = $_POST['idkel'];
                        //     $id_faskes = $_POST['id_faskes'];
                        //     $nama_faskes = $_POST['nama_faskes'];
                        //     $the_geom = $_POST['the_geom'];
                        
                        //     $cek = mysqli_query($koneksi, "SELECT * FROM faskes WHERE id_faskes='$id_faskes'") or die(mysqli_error($koneksi));

                        //     if(mysqli_num_rows($cek) == 0){
                        //         $sql = mysqli_query($koneksi, "INSERT INTO faskes(idkel, nama_faskes, the_geom) VALUES('$idkel', '$nama_faskes', ST_GeomFromText('POINT($the_geom)',4326))") or die(mysqli_error($koneksi));

                        //         if($sql){
                        //             echo '<script>alert("Data Berhasil Ditambahkan"); document.location="../faskes/index.php";</script>';
                        //         }else{
                        //             echo '<div class="alert alert-warning">Gagal Melakukan Proses Tambah Data</div>';
                        //         }
                        //     }
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