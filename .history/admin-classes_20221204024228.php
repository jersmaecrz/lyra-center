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
        public $students;
        //Create setter
        function setStudents($students){
            $this -> students = $students;
        }
        //Create getter
        function getStudents(){
            return $this -> students;
        }
        function countCourses($pdo){
            $stmt = $pdo -> query("SELECT * FROM users");
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            $this -> setStudents($row);
        }
    }
    $student = new Students();
    $student -> countCourses($pdo);
    $row = $student -> getStudents();
    while($row){
        echo "<tr>" ;
        echo "<td>".$row->username ."</td><td>" .$row->lName ."</td><td>" .$row->email ."</td><td>" .$row->gender ."</td>";
    }

    
?>