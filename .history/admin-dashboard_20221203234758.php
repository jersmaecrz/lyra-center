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
            $query = "SELECT * FROM users";
            $stmt = $pdo-> prepare($query);
            $stmt -> execute();
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
        public $name;
        public $courses;
        //Create setters
      
    }
?>