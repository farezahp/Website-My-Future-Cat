<?php
session_start();

include "config.php";

$id = $_GET['id'];

$sql = "UPDATE `kucing` SET `status` = 'sudah' WHERE `kucing`.`id`=$id";

mysqli_query($conn, $sql);

header('location: ../display.php?pesan=adopsi_selesai');