<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['user'])){
    //header("location:login.php");
    echo "<script>window.location.replace('login.php');</script>";
}

?>
