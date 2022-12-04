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

?>