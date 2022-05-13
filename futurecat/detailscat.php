<?php
session_start();

include "function/config.php";
include "component/header.php";

$sql = "SELECT * FROM kucing WHERE id=$_GET[id]";

$query = mysqli_query($conn,$sql);

if(isset($_POST['submit'])){
    $id         = $_GET['id'];
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
        move_uploaded_file($_FILES['foto']['tmp_name'], 'component/_'.$filename);
        $sqledit = "UPDATE `kucing` SET `namajenis` = '$namajenis', `warna` = '$warna', `makanan` = '$makanan', `deskripsilanjut` = '$deskripsilanjut', `gambar` = '$gambar' WHERE `kucing`.`id` = $id";
        mysqli_query($conn, $sqledit);
            header("location:detailscat.php?id=$id&pesan=edit_sukses");
        }
    
}

if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "edit_sukses") {
?>
    <script>
        alert("Edit Data Berhasil");
    </script>
<?php
    }
}

?>

<?php

while($row = mysqli_fetch_array($query)){

?>

<div class="details">
    <div class="title-details">
        <H2> CAT DETAILS </H2>
    </div>
    
    <div class="cat">
        <img src="component/<?= $row['gambar'] ?>" width="300px" height="300px">
    </div>
    <div class="desc">
        <h3>DESKRIPSI :<H3>    
        <div class="textdesc">
            <H2> NAMA JENIS : <?= $row['namajenis'] ?>  </H2>
        </div>
        <div class="textdesc">
            <H2> WARNA : <?= $row['warna'] ?> </H2>
        </div>
        <div class="textdesc">
            <H2> MAKANAN : <?= $row['makanan'] ?> </H2>
        </div>
        <div class="textdesclanjut" >
            <H2> DESKRIPSI LANJUT : <?= $row['deskripsilanjut'] ?> </H2>
        </div>
        <?php if($_SESSION['level'] == 'admin'){ ?>
            <div class="editdelete">
        <div class="tomboledit">
        <a href="edit.php?id=<?= $_GET['id']; ?>"> EDIT </a>
        </div>
        <div class="tomboldelete">
        <a href="delete.php?id=<?= $_GET['id']; ?>"> DELETE </a>
        </div>
        </div>
        <?php } ?>
        <?php if($_SESSION['level'] == 'user'){ ?>
        <div class="tomboladd" style="margin-top: 50px;">   
        <a href="function/adopsi.php?id=<?= $_GET['id']; ?>">ADOPSI</a>
        </div>
        <?php } ?>
        </div>
</div>

<?php
}
?>

<?php include "component/footer.php"; ?>