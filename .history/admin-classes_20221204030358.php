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
        function countStudents($pdo){
            $type = "user";
            $query = "SELECT * FROM users WHERE 'user_type' = ?";
            $stmt = $pdo-> prepare($query);
            $stmt -> execute([$type]);
            $rows = $stmt -> fetchAll();
            //$this ->setStudents($rows);
            foreach($rows as $row){
            echo $rows -> username;
    
          
        }
    }
     $student = new Students();
    $student -> countStudents($pdo);
    /* $rows = $student -> getStudents();
        foreach($rows as $row){
            echo "<tr>
                    <td>".$row->username ."</td>
                    <td>".$row->name ."</td>
                    <td>".$row->email ."</td>
                    </tr>";
         }*/



    
     

    
?>