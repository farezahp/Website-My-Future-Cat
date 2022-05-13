<?php

session_start();

include "component/header.php";

if(empty($_SESSION['nama']) && empty($_SESSION['password'])){
    ?>
    <script>
    window.location.replace("index.php");
    </script>
<?php
}
?>
<div class="aboutus">
    <div class="title-about">
        <H2> CONTACT US </H2>
    </div>
    <div class="contentabout">
        <H2> WHATSAPP : 0812345678912 </H2>
    </div>
    <div class="contentabout">
        <H2> INSTAGRAM : @MYFUTURECAT </H2>
    </div>
    <div class="contentabout">
        <H2> LINE : @BHT3436HFH </H2>
    </div>
    <div class="contentabout">
        <H2> WEB : WWW.MYFUTURECAT.COM </H2>
    </div>
</div>

<?php
include "component/footer.php";
?>