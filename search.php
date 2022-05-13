<?php
session_start();

include "component/header.php";
include "function/config.php";

if(empty($_SESSION['nama']) && empty($_SESSION['password'])){
    ?>
    <script>
    window.location.replace("index.php");
    </script>
<?php
}

if(isset($_POST['submit'])){
    $cari = $_POST['cari'];

    $query = "SELECT * FROM kucing WHERE namajenis LIKE '%$cari%'";
    
    $result = mysqli_query($conn, $query);

}



?>
<div class="container">
<div class="display">
        <form action="search.php" method="post">
            <input type="text" name="cari" placeholder="Masukkan Nama Jenis Kucing" class="fieldsearch">
            <input type="submit" name="submit" class="buttonsearch">
        </form>
        <?php
        if(isset($_POST['submit'])){
        $cari = $_POST['cari'];
        $querycari = "SELECT COUNT(id) FROM kucing WHERE namajenis LIKE '%$cari%'";
        $hasil = mysqli_query($conn, $querycari);
        $jumlah = mysqli_fetch_array($hasil);
        
        ?>
        <h2>Mendapatkan <?= $jumlah['COUNT(id)'] ?> Hasil Pencarian<h2>
        <?php
        }
        ?>
</div>

<div class="kucingcari">

<?php

if(isset($_POST['submit'])){

while($row = mysqli_fetch_array($result)){
?>

<div class="kolomkucingcari">
    <img src="component/<?= $row['gambar'] ?>" alt="" class="gambar">
    <a href="#1" class="buttonadopt">ADOPT ME</a>
</div>  

<?php
 }
}
?>

</div>


</div>
</div>

<?php include "component/footer.php"; ?>