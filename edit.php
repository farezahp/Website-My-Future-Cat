<?php
session_start();

include "function/config.php";
include "component/header.php";

$sql = "SELECT * FROM kucing WHERE id=$_GET[id]";

$query = mysqli_query($conn,$sql);

?>

<?php

while($row = mysqli_fetch_array($query)){

?>
<form action="detailscat.php?id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
<div class="title-details">
<br>
<H2> EDIT DATA KUCING </H2>
</div>


<br>

<br>
<div class="desc">
<BR>
<H2> MASUKKAN UPDATE DATA KUCING<H2>
<br>
<div class="namajenis">
<input type="Username" placeholder="Masukkan Nama Jenis" value="<?= $row['namajenis'] ?>" name="namajenis">
</div>


<br>
<div class="warna">
<input type="Username" placeholder="Masukkan Warna Kucing" value=" <?= $row['warna'] ?> " name="warna">
</div>

<br>
<div class="makanan">
<input type="Username" placeholder="Masukkan Makanan Kucing" value="<?= $row['makanan'] ?>" name="makanan" >
</div>

<br>
<div class="gambar">

                            <label class="custom-file-upload">
                                <input type="file" name="foto" />
                                Upload Gambar
                            </label>

                            </div>
<div class="desclanjut">
<input type="Username" placeholder="Masukkan Deskripsi Lanjut" value="<?= $row['deskripsilanjut'] ?>" name="deskripsilanjut">
</div>
<br>
<input type="submit" name="submit" value="KIRIM" placeholder="KIRIM" style="text-align: center; color: white; font-size: 12px; background-color: #212529; height: 40px; width: 200px;  border-radius: 25px; margin-top: 10px;font-family: 'Cat';
font-size: 20px;">
</div>
</div>
</form>

<?php } ?>

                            
<?php include "component/footer.php"; ?>