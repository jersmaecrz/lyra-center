<?php
    session_start();
    unset($_SESSION['user']);
    //header("location: sIndex.php");
    echo "<script>window.location.replace('sIndex.php');</script>";
?>