<?php
// include database connection file
include "config.php";
 
// Get id from URL to delete that user
$id = $_GET['id'];

$query = "DELETE FROM kucing WHERE id=$id";
// Delete user row from table based on given id
$result = mysqli_query($conn, $query);
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../display.php?pesan=hapus_sukses");
?>