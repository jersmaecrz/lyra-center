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
            $query = "SELECT * FROM emp_tbl";
            $stmt = $pdo-> prepare($query);
            $stmt -> execute();
            $rows = $stmt -> fetchAll();  
            $rowCount = $stmt->rowCount();
            echo "<h3>Number of All Employee Rows: $rowCount</h3>";
        }
    }
    $dash = new Dashboard ();
    $dash -> countStudents($pdo)


?>