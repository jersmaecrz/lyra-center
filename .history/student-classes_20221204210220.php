<?php

    class Courses {
        //Attributes
        public $payments;
        //Create setter
        function setPayments($payments){
            $this -> payments = $payments;
        }
        //Create getter
        function getPayments(){
            return $this -> payments;
        }
        function retrieveStudentPayments($pdo, $ecID){
            $query = "SELECT * FROM `payment` WHERE `ecID` = ?";
            $stmt = $pdo-> prepare($query);
            $stmt -> execute([$ecID]);
            $rows = $stmt -> fetchAll();
            $this -> setPayments($rows);
        }
    }        

?>