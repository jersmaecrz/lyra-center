<?php
    require_once("Database.php");

    class Student {
        private $sId;
        private $sUsername;
        private $sPassword;
        private $sEmail;
        private $db;

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

        // methods
        function register() {
            $this->db->query("INSERT INTO student (sUsername, sPassword, sEmail) VALUES (:sUsername, :sPassword, :sEmail)");
            $this->db->bind(":sUsername", $this->sUsername);
            $this->db->bind(":sPassword", $this->sPassword);
            $this->db->bind(":sEmail", $this->sEmail);
            $this->db->execute();
        }
    }

?>