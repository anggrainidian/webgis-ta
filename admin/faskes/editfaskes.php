<?php include '../komponen/head.php' ?>

<main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Halaman Ubah Data Fasilitas Kesehatan</h2>
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
                                <h3 class="panel-title">Form Edit Data</h3>
                 <?php 
                    $id_faskes = $_GET['id_faskes'];
                    $query=mysqli_query($koneksi, "SELECT id_faskes,idkel, nama_faskes, detail, foto, ST_AsText(the_geom) AS koordinat FROM faskes WHERE id_faskes = '$id_faskes'");
                    $dt= mysqli_fetch_assoc($query); 
                 ?>
                            </div>
                            <div class="panel-content">
                                <!-- Form Group Start -->
                        <form class="" id="" method="POST" action=""enctype="multipart/form-data">
                        <div class="form-group form-float">
                            <div class="form-line">
                            <label class="form-label"><b>Nama Desa/Kelurahan*</b></label>
                            <select class="form-control show-tick" name="idkel">
                                    <option value="">-- Please select --</option>
                                    <?php $sql = mysqli_query($koneksi,"SELECT * FROM kelurahan") or die(mysqli_error($koneksi)); 
                                        while ($desa = mysqli_fetch_array($sql)) {
                                    ?>
                                         <option value="<?php echo $desa['idkel'] ?>" <?php echo $dt['idkel'] == $desa['idkel'] ? 'selected' : null ; ?>><?php echo $desa['namakel'] ?></option>
                                    <?php
                                        }
                                    ?>  
                                </select>
                            </div>
                            <br>
                            <div class="form-line">
                            <label class="form-label"><b>Nama Fasilitas Kesehatan*</b></label>
                                <input type="text" class="form-control"  value="<?php echo $dt['nama_faskes']?>" name="nama_faskes">
                            </div>
                            <br>
                            <div class="form-line">
                            <span class="label-text ">Detail</span>
                                <textarea class="form-control" name="detail"><?php echo $dt['detail'] ?></textarea>
                            </div>
                            <br>
                            <div class="form-line">
                            <span class="label-text ">File Input</span>
                            <div class="col-md-10">
                                <label class="custom-file">
                               <input type="file" name="foto" value= "<?php echo $dt['foto']?>" class="custom-file-input">
                                    <span class="custom-file-label">Pilih File</span>
                                    <?php "<img src='img/".$dt['foto']."'style='width:50px; height:50px;'>";?>
                                </label>
                            </div>
                            <br>
                            <div class="form-line">
                            <label class="form-label"><b>Titik Koordinat*</b></label>
                                <input type="text" class="form-control"  value="<?php echo $dt['koordinat']?>" name="the_geom">
                            </div>
                        <button class="btn btn-info" type="submit" name="ubah">Ubah</button>
                        <a href="../faskes/index.php"><button type="button" class="btn btn-default">BATAL</button></a>
                    </form>
                    <!-- Form Group End -->
            <?php
                 if (isset($_POST['ubah'])){
                
                    $idkel	 = $_POST['idkel'];
                    $nama_faskes = $_POST['nama_faskes'];
                    $titik = $_POST['the_geom'];
                    $detail = $_POST['detail'];
                    
                    $filename = $_FILES['foto']['name'];

                    $query = mysqli_query($koneksi, "UPDATE faskes SET
                    idkel = '$idkel', nama_faskes = '$nama_faskes', 
                    ST_AsText(the_geom)='$titik', detail = '$detail', foto='$filename'
                    WHERE id_faskes = '$id_faskes'") or die (mysqli_error($koneksi));
                    $query_run = mysqli_query($koneksi, $query);

                    if($query_run){
                        move_uploaded_file($_FILES["foto"]["name"], "img/".$_FILES["foto"]["name"]);
                        echo "<script>alert('sukses'); document.location= 'index.php'</script>";
                    }
                    else{
                        echo "<script>alert('gagal'); document.location= 'edit.php'</script>";
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