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


    }

    class Organization {
        //Define at least 4 attributes
        public $name;
        public $yearEstablished;
        private $yearlyEarnings;
        protected $location;
        //Create a parameterized constructor
        function Organization($name,$location,$established,$earnings){
            $this -> name = $name;
            $this -> location = $location;
            $this -> yearEstablished = $established;
            $this -> yearlyEarnings = $earnings;
        }
        //Create setters
        function setName($name){
            $this -> name = $name;
        }
        function setEstablished($established){
            $this -> yearEstablished = $established;
        }
        function setEarnings($earnings){
            $this -> yearlyEarnings = $earnings;
        }
        function setLocation($location){
            $this -> location = $location;
        }
        //Create getters
        function getName(){
            return $this -> name;
        }
        function getEstablished(){
            return $this -> yearEstablished;
        }
        function getEarnings(){
            return $this -> yearlyEarnings;
        }
        function getLocation(){
            return $this -> location;
        }
        //Create a function that will display the attribute values
        function displayAttributes(){
            echo "<h4>". $this->getName()."</h4>";
            echo "<p>Location: ". $this->getLocation()."</p>";
            echo "<p>Year of Establishment: ". $this->getEstablished()."</p>";
            echo "<p>Yearly Revenue: ₱". $this->getEarnings()."</p>";
        }
    }
?>