<?php include "component/header.php"; ?>
<div class="title-details">
<br>
<H2> ADD DATA KUCING </H2>
</div>


<br>



<br>
<div class="desc" >
<BR>
<H2> MASUKKAN DATA KUCING <H2>
<br>
<form action="function/add-action.php" method="post" enctype="multipart/form-data">
                            <div class="namajenis">
                            <input type="text" placeholder="Masukkan Nama Jenis" name="namajenis">
                            </div>


<br>
<div class="warna">
                            <input type="text" placeholder="Masukkan Warna Kucing" name="warna">
                            </div>

<br>
<div class="makanan">
                            <input type="text" placeholder="Masukkan Makanan Kucing" name="makanan">
                            </div>

<br>
<div class="gambar">

                            <label class="custom-file-upload">
                                <input type="file" name="foto"/>
                                Upload Gambar
                            </label>

                            </div>
<br>
<div class="desclanjut">
                            <input type="text" placeholder="Masukkan Deskripsi Lanjut" name="deskripsilanjut">
                            </div>
<br>
<input type="submit" value="KIRIM" placeholder="KIRIM" style="text-align: center; color: white; font-size: 12px; background-color: #212529; height: 40px; width: 200px;  border-radius: 25px; margin-top: 10px;font-family: 'Cat';
font-size: 20px;">
</div>
</form>
</div>

                            
<?php include "component/footer.php"; ?>