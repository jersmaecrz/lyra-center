<?php
    require_once("Database.php");

    class StudentCourses {
        private $ecID;
        private $ecStatus;
        private $crsID;
        private $sUsername;
        private $paymentID;

        function __construct() {
            
        }

        // getters
        function getEcID() {
            return $this->ecID;
        }

        function getEcStatus() {
            return $this->ecStatus;
        }

        function getCrsID() {
            return $this->crsID;
        }

        function getSUsername() {
            return $this->sUsername;
        }

        function getPaymentID() {
            return $this->paymentID;
        }

        // methods
        function getCourseByStudent($sUsername) {
            $this->db->query("SELECT * FROM 'enrolled courses' WHERE sUsername = :sUsername");
            $this->db->bind(":sUsername", $sUsername);
            return $this->db->resultSet();
        }
    }

?>