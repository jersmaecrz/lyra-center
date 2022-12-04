<?php
    require_once("Database.php");

    class Student {
        private $sId;
        private $sUsername;
        private $sPassword;
        private $sEmail;
        private $db;
        private $sName;

        function __construct() {
            $this->db = new Database();
        }

        // setters
        function setSUsername($sUsername) {
            $this->sUsername = $sUsername;
        }

        function setSPassword($sPassword) {
            $this->sPassword = $sPassword;
        }

        function setSEmail($sEmail) {
            $this->sEmail = $sEmail;
        }
        function setSName($sName) {
            $this->sName = $sName;
        }

        // getters
        function getSId() {
            return $this->sId;
        }

        function getSUsername() {
            return $this->sUsername;
        }

        function getSPassword() {
            return $this->sPassword;
        }

        function getSEmail() {
            return $this->sEmail;
        }

        function getSName() {
            return $this->sName;
        }

        // methods
        function register() {
            $this->db->query("INSERT INTO `users` (`username`,`name`, `email`, `user_type`,`password`) VALUES (:sUsername,:sName,:sEmail,:sUserType,:sPassword)");
            $this->db->bind(":sUsername", $this->sUsername);
            $this->db->bind(":sName", $this->sName);
            $this->db->bind(":sEmail", $this->sEmail);
            $this->db->bind(":sUserType", 'user');
            $this->db->bind(":sPassword", $this->sPassword);
            $this->db->execute();
        }
    }

?>