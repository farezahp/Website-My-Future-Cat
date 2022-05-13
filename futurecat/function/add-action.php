<?php 

include 'config.php';

$namajenis  = $_POST['namajenis'];
$warna      = $_POST['warna'];
$makanan    = $_POST['makanan'];
$deskripsilanjut    = $_POST['deskripsilanjut'];

$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);


	if($ukuran < 1044070){		
		$gambar = '_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], '../component/'.'_'.$filename);
		mysqli_query($conn, "INSERT INTO `kucing` (`id`, `namajenis`, `warna`, `makanan`, `deskripsilanjut`, `gambar`, `status`) VALUES (NULL, '$namajenis', '$warna', '$makanan', '$deskripsilanjut', '$gambar', 'belum')");
		header("location:../display.php?alert=berhasil");
	}else{
		header("location:../display.php?alert=gagal_ukuran");
	}


?>