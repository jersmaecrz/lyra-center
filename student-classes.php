<?php
   require_once("config.php");
    class Courses {
        //Attributes
        public $courses;
        //Create setter
        function setCourses($courses){
            $this -> courses = $courses;
        }
        //Create getter
        function getCourses(){
            return $this -> courses;
        }
        function retrieveCourses($pdo){
            $query = "SELECT * FROM `courses`";
            $stmt = $pdo-> prepare($query);
            $stmt -> execute();
            $rows = $stmt -> fetchAll();
            $this -> setCourses($rows);
        }
    }     
    class Course {
        //Attributes
        public $course;
        //Create setter
        function setCourse($course){
            $this -> course = $course;
        }
        //Create getter
        function getCourse(){
            return $this -> course;
        }
        function retrieveCourse($pdo, $crsID){
            $query = "SELECT * FROM `courses` WHERE `crsID` = ?";
            $stmt = $pdo-> prepare($query);
            $stmt -> execute([$crsID]);
            $rows = $stmt -> fetchAll();
            $this -> setCourse($rows);
        }
    }     
    class StudentPayment {
        //Attributes
        public $payment;
        //Create setter
        function setPayment($payment){
            $this -> payment = $payment;
        }
        //Create getter
        function getPayment(){
            return $this -> payment;
        }
        function retrieveCourse($pdo, $crsID){
            $query = "SELECT * FROM `courses` WHERE `crsID` = ?";
            $stmt = $pdo-> prepare($query);
            $stmt -> execute([$crsID]);
            $rows = $stmt -> fetchAll();
            $this -> setPayment($rows);
        }        
        function insertPayment($pdo, $pytID, $schemeID,$ecID,$method,$bank,$accNo){
            $query = "INSERT INTO `payment`(`pytID`, `schemeID`, `ecID`, `method`, `bank`, `acctNo`) VALUES (?,?,?,?,?,?)";
            $stmt = $pdo-> prepare($query);
            $stmt -> execute([$pytID,$schemeID,$ecID,$method,$bank,$accNo]);
        }
    }        
    class StudentEnrollment {
        //Attributes
        public $enrollment;
        //Create setter
        function setEnrollment($enrollment){
            $this -> enrollment = $enrollment;
        }
        //Create getter
        function getPayment(){
            return $this -> enrollment;
        }
        function retrieveCourse($pdo, $crsID){
            $query = "SELECT * FROM `enrolled courses` WHERE `crsID` = ?";
            $stmt = $pdo-> prepare($query);
            $stmt -> execute([$crsID]);
            $rows = $stmt -> fetchAll();
            $this -> setEnrollment($rows);
        }        
        function insertEnrollment($pdo, $ecID, $ecStatus,$crsID,$sUsername,$paymentID){
            $query = "INSERT INTO `enrolled courses`(`ecID`, `ecStatus`, `crsID`, `sUsername`, `paymentID`) VALUES (?,?,?,?,?)";
            $stmt = $pdo-> prepare($query);
            $stmt -> execute([$ecID,$ecStatus,$crsID,$sUsername,$paymentID]);
        }
    }        

?>