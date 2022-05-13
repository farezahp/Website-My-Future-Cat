<?php
session_start();


include "function/config.php";
include "component/header.php";

$sql = "SELECT * FROM kucing WHERE status='belum'";

$query = mysqli_query($conn,$sql);

if(empty($_SESSION['nama']) && empty($_SESSION['password'])){
    ?>
    <script>
    window.location.replace("index.php");
    </script>
<?php
}

if(isset($_GET['pesan'])){
    if ($_GET['pesan'] == "adopsi_selesai") {
        ?>
        <script>
            alert("Adopsi Berhasil");
        </script>
    <?php

    }else if($_GET['pesan'] == "hapus_sukses") {
        ?>
        <script>
            alert("Hapus Data Berhasil");
        </script>
    <?php
    }
}    
?>
<div class="container">
<div class="display">
    <h2>NEW CATS OFFER<h2>
        
</div>
<?php if($_SESSION['level'] == 'admin'){ ?>
<div class="tomboladd" style="text-align:center;">
<a href="add.php">Tambah Data</a>
</div>
<?php } ?>



<div class="kucing">
<?php

while($row = mysqli_fetch_array($query)){

?>

    <div class="kolomkucing">
        <img src="component/<?= $row['gambar'] ?>" alt="" class="gambar">
        <a href="detailscat.php?id=<?= $row['id'] ?>" class="buttonadopt">ADOPT ME</a>
    </div> 

    
    <?php } ?>
</div>


</div>
</div>

<?php include "component/footer.php"; ?>