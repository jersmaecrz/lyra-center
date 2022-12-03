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
            $gender = "Female";
            $query = "SELECT * FROM users WHERE 'user_type' = ?";
            $stmt = $pdo-> prepare($query);
            $stmt -> execute([$gender]);
            $rows = $stmt -> fetchAll();
            
             echo "<h3>All Female Employees</h3>";
             echo "<table><tr>";
             echo "<th>First Name</th>";
             echo "<th>Last Name</th>";
             echo "<th>Email</th>";
             echo "<th>Gender</th>";
             echo "</tr>";
             foreach($rows as $row){
                 echo "<tr>" ;
                 echo "<td>".$row->username ."</td><td>" .$row->name ."</td><td>" .$row->email ."</td>";
             }
             echo "</table><br>";

             /*

            $userType = "user";
            $query = $pdo -> query("SELECT * FROM users WHERE user_type = ?");
            $stmt = $pdo-> prepare($query);
            $stmt -> execute([$userType]);
            $rows = $stmt -> fetchAll();
            foreach($rows as $row){
                
                echo "<tr>
                        <td>".$row->username ."</td>
                        <td>".$row->name ."</td>
                        <td>".$row->email ."</td>

                     </tr>

                ";
            }*/
        }
    }
    $student = new Students();
    $student -> countCourses($pdo);
    

    
?>