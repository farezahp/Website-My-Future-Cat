<?php 
session_start();

include 'config.php';

$username = $_POST['nama'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM user WHERE nama='$username' AND password='$password' ";
$login = mysqli_query($conn, $sql);

$cek = mysqli_num_rows($login);

if($cek == 1){

    $data = mysqli_fetch_array($login);
    
    $_SESSION['nama']       = $data['nama'];
    $_SESSION['password']   = $data['password'];
    $_SESSION['level']      = $data['level'];
    
    header("Location: ../display.php");

}else{
    header("Location: ../index.php?pesan=gagal");   
}

?>