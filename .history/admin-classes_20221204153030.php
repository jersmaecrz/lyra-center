<?php
   require_once("config.php");
   class Dashboard {
        //Attributes
        public $name;
        public $courses;
        //Create setters
        function setStudents($students){
            $this -> students = $students;
        }
        function setCourses($courses){
            $this -> courses = $courses;
        }
        //Create getters
        function getStudents(){
            return $this -> students;
        }
        function getCourses(){
            return $this -> courses;
        }
        function countStudents($pdo){
            $type = "user";

            $query = "SELECT * FROM users WHERE `user_type` = ?" ;
            $stmt = $pdo-> prepare($query);
            $stmt -> execute([$type]);
            $rows = $stmt -> fetchAll();  
            $rowCount = $stmt->rowCount();
            $this -> setStudents($rowCount);
        }
        function countCourses($pdo){
            $query = "SELECT * FROM courses";
            $stmt = $pdo-> prepare($query);
            $stmt -> execute();
            $rows = $stmt -> fetchAll();  
            $rowCount = $stmt->rowCount();
            $this -> setCourses($rowCount);
        }
    }
    class Students {
        //Attributes
        public $students;
        //Create setter
        function setStudents($students){
            $this -> students = $students;
        }
        //Create getter
        function getStudents(){
            return $this -> students;
        }
        function retrieveStudents($pdo){
            $type = "user";
            $query = "SELECT * FROM users WHERE `user_type` = ?";
            $stmt = $pdo-> prepare($query);
            $stmt -> execute([$type]);
            $rows = $stmt -> fetchAll();
            $this -> setStudents($rows);
        }
    }
    class StudentCourse {
        //Attributes
        public $studentUsername;
        public $courses;
        public $status;
        //Create setter
        function setStudentUsername($studentUsername){
            $this -> studentUsername = $studentUsername;
        }
        function setCourses($courses){
            $this -> courses = $courses;
        }
        //Create getter
        function getStudentUsername(){
            return $this -> studentUsername;
        }
        function getCourses(){
            return $this -> courses;
        }
        function retrieveStudentCourses($pdo){
            $id = $this-> getStudentUsername();
            $query = "SELECT * FROM `enrolled courses` JOIN `courses` WHERE `sUsername` = ?";
            $stmt = $pdo-> prepare($query);
            $stmt -> execute([$id]);
            $rows = $stmt -> fetchAll();
            $this -> setCourses($rows);
        }
        function updateEnrollmentStatus($pdo, $ecID, $status){
            $query = "UPDATE `enrolled courses` SET `ecStatus` = ? WHERE `ecID` = ?";
            $stmt = $pdo-> prepare($query);
            $stmt -> execute([$status,$ecID]);
            echo "Successfully Updated.";
            echo "<script>
                window.location.replace('aEnrolledCourses.php?uname=".filter_var($_GET['uname'])."');
            </script>"; 
             
        }
    }
    class StudentPayment {
        //Attributes
        public $studentUsername;
        public $courses;
        public $status;
        //Create setter
        function setStudentUsername($studentUsername){
            $this -> studentUsername = $studentUsername;
        }
        function setCourses($courses){
            $this -> courses = $courses;
        }
        //Create getter
        function getStudentUsername(){
            return $this -> studentUsername;
        }
        function getCourses(){
            return $this -> courses;
        }
        function retrieveStudentCourses($pdo){
            $id = $this-> getStudentUsername();
            $query = "SELECT * FROM `enrolled courses` JOIN `courses` WHERE `sUsername` = ?";
            $stmt = $pdo-> prepare($query);
            $stmt -> execute([$id]);
            $rows = $stmt -> fetchAll();
            $this -> setCourses($rows);
        }
        function updateEnrollmentStatus($pdo, $ecID, $status){
            $query = "UPDATE `enrolled courses` SET `ecStatus` = ? WHERE `ecID` = ?";
            $stmt = $pdo-> prepare($query);
            $stmt -> execute([$status,$ecID]);
            echo "Successfully Updated.";
            echo "<script>
                window.location.replace('aEnrolledCourses.php?uname=".filter_var($_GET['uname'])."');
            </script>"; 
             
        }
    }        
?>