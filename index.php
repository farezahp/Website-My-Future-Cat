<?php


include "component/header.php";

if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "logout") {
        ?>
        <script>
            alert("Berhasil Logout");
        </script>
        <?php
    }
}

?>


<div class="container">
    <div class="content-login">
        <form action="function/cek_login.php" method="post">             
            <H2> LOGIN </H2>
            <br>
            <div class="fieldlogin">
                <input type="Username" placeholder="Masukkan Username" name="nama">
            </div>
            <br>
            <div class="fieldlogin">
                <input type="Password" placeholder="Masukkan Password" name="password">
            </div>
            <br>
<?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "<p> Login Gagal </p>";
        }  
    }
?>
            <div class="submitlogin">
                <input type="submit" value="LOGIN" placeholder="LOGIN">
            </div>
        </form>
    </div>


    
</div>

<?php include "component/footer.php"; ?>