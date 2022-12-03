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
        public $row;
        //Create setters
        function setStudents($students){
            $this -> students = $students;
        }
        function countCourses($pdo){
            $stmt = $pdo -> query("SELECT * FROM emp_tbl");
            echo "<h3>All Employees</h3>";
            echo "<table><tr>";
            echo "<th>First Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Email</th>";
            echo "<th>Gender</th>";
            echo "</tr>";
        }
        //Select all data
    $stmt = $pdo -> query("SELECT * FROM emp_tbl");
    echo "<h3>All Employees</h3>";
    echo "<table><tr>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "<th>Email</th>";
    echo "<th>Gender</th>";
    echo "</tr>";
    while($row = $stmt->fetch(PDO::FETCH_OBJ)){
        echo "<tr>" ;
        echo "<td>".$row->fName ."</td><td>" .$row->lName ."</td><td>" .$row->email ."</td><td>" .$row->gender ."</td>";
    }
    echo "</table><br>";
      
    }
?>