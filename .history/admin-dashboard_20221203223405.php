<?php
    require_once("config/config.php");

    //Count all rows
    $query = "SELECT * FROM emp_tbl";
    $stmt = $pdo-> prepare($query);
    $stmt -> execute([$start]);
    $rows = $stmt -> fetchAll();  
    $rowCount = $stmt->rowCount();
    echo "<h3>Number of All Employee Rows: $rowCount</h3>";
    class Dashboard {
        public $students;
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
    }


?>