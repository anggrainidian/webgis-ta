<?php 

include '../../config.php';

if (isset($_POST['save'])){

    $id_area = $_POST['id_area'];
    //$idkel	 = $_POST['namakel'];
    $waktu = $_POST['waktu'];
    $status_korban = $_POST['status_korban'];
    $jumlah_korban = $_POST['jumlah_korban'];
    $kendaraan_terlibat = $_POST['kendaraan_terlibat'];
    $the_geom = $_POST['the_geom'];
		
		$ekstensi_boleh =  array('png','jpg','jpeg','gif');
		$filename = $_FILES['foto']['name'];
		$x = explode('.', $filename);
		$ekstensi = strtolower(end($x));
		$ukuran = $_FILES['foto']['size'];
		$file_tmp = $_FILES['foto']['tmp_name'];

		//uji ekstensi file yg di upload
		if(in_array($ekstensi, $ekstensi_boleh) === true)
		{
			//boleh up file
			if ($ukuran < 1044070){
				//jika ukuran sesuai
				move_uploaded_file($file_tmp, 'img/'.$filename);

				$simpan = mysqli_query($koneksi, "INSERT INTO data_laka VALUES 
                (null, '$id_area','$filename', '$waktu','$status_korban', '$jumlah_korban', 
                '$kendaraan_terlibat', ST_GeomFromText('POINT($the_geom)',4326))") or die (mysqli_error($koneksi));

				if ($simpan){
					echo "<script>alert('Data Berhasil Ditambahkan');
					document.location='index.php'</script>";
				}else{
					echo "<script>alert('Gagal menambahkan data');
					document.location='index.php'</script>";
				}

			} else{
				//ukuran tidak sesuai
				echo "<script>alert('ukuran file yang diupload terlalu besar');
			document.location='index.php'</script>";
			}
				
			

		}else{
			//ekstensi file tidak sesuai
			echo "<script>alert('ekstensi file yang diupload tidak diperbolehkan');
			document.location='index.php'</script>";
		}

}

        