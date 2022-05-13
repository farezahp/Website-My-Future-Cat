<?php 


include "component/header.php"; 


?>


<div class="form">
                            <p> Yakin Ingin Menghapus Data Ini ?</p>

                            
                            <div class="tidak">
                            <a href="detailscat.php?id=<?= $_GET['id'] ?>">TIDAK</a>
                            </div>

                            <div class="ya">
                            <a href="function/delete-action.php?id=<?= $_GET['id'] ?>">YA</a>
                            </div>




                        </div>
                            
<?php include "component/footer.php"; ?>