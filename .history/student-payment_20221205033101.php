<?php
    include "session_checker.php";
    include "student-classes.php";

    if(isset($_POST['nextBtn']) && isset($_POST['method']) && isset($_POST['bank'])&& isset($_POST['acctNo']) && isset($_POST['cID'])){
        $pytID =  time() . uniqid(mt_rand(), true);
        $schemeID = 1;
        $cID = $_POST['cID'];
        $method = $_POST['method'];
        $bank = $_POST['bank'];
        $accNo = $_POST['acctNo'];
        $sPayment = new StudentPayment();
        $sPayment->insertPayment($pdo, $pytID, $schemeID,$cID,$method,$bank,$accNo,$sPayment);
        echo "<script>
                window.location.replace('proof.php');
              </script>"; 
    }


?>