<?php include '../komponen/head.php' ?>

<main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Halaman Data Fasilitas Kesehatan</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../komponen/index.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><span>Tabel</span></li>
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
                                <h3 class="panel-title">Tabel Fasilitas Kesehatan</h3>
                            </div>
                    <!-- Records List Start -->
                    <div class="panel-content">
                    <a href="../faskes/tambahfaskes.php">
                                 <button type="button" class="btn btn-rounded btn-info">Tambah Data</button>
                                 <br>
                            </a>
                            <br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-cells-middle">
                            <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Desa/Kelurahan</th>
                                        <th>Nama Fasilitas Kesehatan</th>
                                        <th>Detail</th>
                                        <th>Foto</th>
                                        <th>Titik Koordinat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no =1;
                                        $sql = mysqli_query($koneksi,"SELECT id_faskes, idkel, nama_faskes, ST_AsText(the_geom) AS titik, detail, foto FROM faskes") or die(mysqli_error($koneksi));
                                        while($dt = mysqli_fetch_array($sql)){
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <?php $datakel=mysqli_query($koneksi, "SELECT * FROM kelurahan WHERE idkel='$dt[idkel]'") or die(mysqli_error($koneksi)); 
                                            $dt2=mysqli_fetch_array($datakel);
                                            echo "<td>$dt2[namakel]</td>"
                                        ?>
                                        <td><?php echo $dt['nama_faskes']?></td>
                                        <td><?php echo $dt['detail']?></td>
                                        <td>
                                            <img style="width:200px" src="<?php echo "img/".$dt['foto'] ?>" alt="">
                                        </td>
                                        <td><?php echo $dt['titik']?></td>
                                        </td>
                                        <td>
                                        <a href="editfaskes.php?editfaskes&id_faskes=<?php echo $dt['id_faskes']; ?>"><i class="material-icons">edit</i> <span class="icon-name"></span></a>
                                        <a href="hapusfaskes.php?hapusfaskes&id_faskes=<?php echo $dt['id_faskes']; ?>"> <i class="material-icons" 
                                        onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" >delete</i> <span class="icon-name"></span>
                                        </a>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Records List End -->
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

