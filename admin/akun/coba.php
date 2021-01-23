<?php include '../komponen/head.php' ?>

<main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Halaman Data Jenis Rawan</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../komponen/index.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><span>Tabel</span></li>
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
                        <h3 class="panel-title">Tabel Jenis Rawan</h3>
                    </div>
                    <!-- Records List Start -->
                    <div class="panel-content">
                    <a href="../jenis/tambahjenis.php">
                                 <button type="button" class="btn btn-rounded btn-info">Tambah Data</button>
                                 <br>
                            </a>
                            <br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-cells-middle">
                            <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id Area</th>
                                        <th>Waktu </th>
                                        <th>Status Korban </th>
                                        <th>Jumlah Korban </th>
                                        <th>Kendaraan Terllibat </th>
                                        <th>Titik Koordinat </th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no =1;
                                        $sql = mysqli_query($koneksi,"SELECT kd_data, id_area, waktu, status_korban, jumlah_korban, kendaraan_terlibat, ST_AsText(the_geom) 
                                        AS titik FROM data_laka") or die(mysqli_error($koneksi));
                                        while($dt = mysqli_fetch_array($sql)){
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <?php $data=mysqli_query($koneksi, "SELECT * FROM area_kecelakaan WHERE id_area='$dt[id_area]'") or die(mysqli_error($koneksi)); 
                                            $dt2=mysqli_fetch_array($data);
                                            echo "<td>$dt2[id_area]</td>"
                                        ?>
                                        <td><?php echo $dt['waktu'] ?></td>
                                        <td><?php echo $dt['status_korban'] ?></td>
                                        <td><?php echo $dt['jumlah_korban'] ?></td>
                                        <td><?php echo $dt['kendaraan_terlibat'] ?></td>
                                        <td><?php echo $dt['titik'] ?></td>
                                        <td>
                                        <a href="editlaka.php?editlaka&kd_data=<?php echo $dt['kd_data']; ?>"><i class="material-icons">edit</i> <span class="icon-name"></span></a>
                                        <a href="hapuslaka.php?hapuslaka&kd_data=<?php echo $dt['kd_data']; ?>"> <i class="material-icons" 
                                        onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" >delete</i> <span class="icon-name"></span>
                                        </a>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
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
            <?php include '../komponen/footer.php'; ?>
            <!-- Main Footer Start -->
            
            <!-- Main Footer End -->
        </main>
        


