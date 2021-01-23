<?php include '../komponen/head.php' ?>

<main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Halaman Data Kelurahan</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../komponen/index.php">Dashboard</a></li>
                                <li class="breadcrumb-item"><span>Tabel</span></li>
                                <li class="breadcrumb-item active"><span>Kelurahan</span></li>
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
                    <!-- Records List Start -->
                    <div class="records--list" data-title="Data Kelurahan">
                        <div>
                        <a href="../desa/tambahdesa.php">
                                 <button type="button" class="btn btn-rounded btn-info">Tambah Data</button>
                            </a>
                        </div>
                        <table id="recordsListView">
                        <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Desa/Kelurahan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no =1;
                                        $sql = mysqli_query($koneksi,"SELECT * FROM kelurahan") or die(mysqli_error($koneksi));
                                        while($dt = mysqli_fetch_array($sql)){
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $dt['namakel'] ?></td>
                                        <td>
                                        <a href="editdesa.php?editdesa&idkel=<?php echo $dt['idkel']; ?>"><i class="material-icons">edit</i> <span class="icon-name"></span></a>
                                        <a href="hapusdesa.php?hapusdesa&idkel=<?php echo $dt['idkel']; ?>"> <i class="material-icons" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" >delete</i> <span class="icon-name"></span>
                                        </a>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                        </table>
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

