<?php
$koneksi = mysqli_connect("localhost", "root", "", "webgis") or die (mysqli_error($koneksi));
if(!$koneksi) {
        echo "koneksi gagal";
}
?>