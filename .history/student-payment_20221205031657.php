<?php
    include "session_checker.php";
    include "student-classes.php";

    if(isset($_POST['nextBtn']) && isset($_POST['method']) && isset($_POST['bank'])&& isset($_POST['acctNo'])){
        echo $_POST['method'];
        echo $_POST['bank'];
        echo $_POST['acctNo'];
        $pytID =  time() . uniqid(mt_rand(), true);

        $sPayment = new StudentPayment();
        $sPayment->insertPayment($pdo, $pytID, $schemeID,$ecID);
    }


?>