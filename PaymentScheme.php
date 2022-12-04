<?php
    require_once("Database.php");

    class PaymentScheme {
        private $schemeID;
        private $method;
        private $bank;
        private $acctNo;
        private $db;

        function __construct() {
            $this->db = new Database();            
        }

        // setters
        function setMethod($method) {
            $this->method = $method;
        }

        function setBank($bank) {
            $this->bank = $bank;
        }

        function setAcctNo($acctNo) {
            $this->acctNo = $acctNo;
        }

        // getters
        function getMethod() {
            return $this->method;
        }

        function getBank() {
            return $this->bank;
        }

        function getAcctNo() {
            return $this->acctNo;
        }

        // methods
        function getPaymentSchemes() {
            $this->db->query("SELECT * FROM 'payment scheme'");
            return $this->db->resultSet();
        }
    }

?>