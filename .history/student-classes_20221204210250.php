<?php

    class Courses {
        //Attributes
        public $courses;
        //Create setter
        function setCourses($courses){
            $this -> courses = $courses;
        }
        //Create getter
        function getPayments(){
            return $this -> payments;
        }
        function retrieveStudentPayments($pdo){
            $query = "SELECT * FROM `courses`";
            $stmt = $pdo-> prepare($query);
            $stmt -> execute();
            $rows = $stmt -> fetchAll();
            $this -> setCourses($rows);
        }
    }        

?>