<?php
    include "session_checker.php";
    include "student-classes.php";

    if(isset($_POST['nextBtn']) && isset($_POST['method']) && isset($_POST['bank'])&& isset($_POST['acctNo']) && isset($_POST['cID'])){
        echo $_POST['method'];
        echo $_POST['bank'];
        echo $_POST['acctNo'];
        $pytID =  time() . uniqid(mt_rand(), true);
        $schemeID = 1;
        $cID = $_POST['cID'];

        $sPayment = new StudentPayment();
        $sPayment->insertPayment($pdo, $pytID, $schemeID,$ecID);
    }


?>