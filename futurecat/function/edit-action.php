<?php

include "config.php";

$id         = $_GET['id'];
$namajenis  = $_POST['namajenis'];
$warna      = $_POST['warna'];
$makanan    = $_POST['makanan'];
$deskripsilanjut    = $_POST['deskripsilanjut'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if($ukuran < 1044070){		
    $gambar = $rand.'_'.$filename;
    move_uploaded_file($_FILES['foto']['tmp_name'], '../component/'.$rand.'_'.$filename);
    $sql = "UPDATE `kucing` SET `namajenis` = '$namajenis', `warna` = '$warna', `makanan` = '$makanan', `deskripsilanjut` = '$deskripsilanjut', `gambar` = '$gambar' WHERE `kucing`.`id` = $id";
    mysqli_query($conn, $sql);
		header("location:../detailscat.php?id=$_GET['id']");
	}else{
		header("location:../detailscat.php?id=$_GET['id']");
	}
?>