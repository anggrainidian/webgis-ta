<?php include '../komponen/head.php' ?>

<?php 
    $id_akun = $_GET['id_akun'];
    $query=mysqli_query($koneksi, "SELECT * FROM akun WHERE id_akun = '$id_akun'");
    $dt= mysqli_fetch_assoc($query); 
    ?>
<main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Halaman Edit Data Akun</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../komponen/index.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><span>Form Edit</span></li>
                                <li class="breadcrumb-item active"><span>Data Akun</span></li>
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
                        <div class="form-line">
                            <span class="label-text ">Username</span>
                                <input type="text" class="form-control" name="username" value="<?php echo $dt['username']?>"> 
                        </div>
                        <br>
                        <div class="form-line">
                            <span class="label-text ">Password</span>
                                <input type="text" class="form-control" name="password" value="<?php echo $dt['password']?>"> 
                        </div>
                        <br>
                        <div class="form-line">
                            <span class="label-text ">Level</span>
                                <input type="text" class="form-control" name="level" value="<?php echo $dt['level']?>"> 
                        </div>
                        <br>
                        <button class="btn btn-info" type="submit" name="save">Ubah</button>
                        <a href="../akun/index.php"><button type="button" class="btn btn-default">BATAL</button></a>
                    </form>
                                <!-- Form Group End -->
                                <hr>
            <?php
                if (isset($_POST["ubah"]))
                {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $level = $_POST['level'];
                    
                    $query= mysqli_query($koneksi, "UPDATE akun SET username='$_POST[username]', password='$_POST[password]',level='$_POST[level]' WHERE id_akun='$dt[id_akun]'");
            
                    echo "<script language='javascript'>alert('Data Berhasil Di Ubah'); document.location='../desa/index.php';</script>";

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