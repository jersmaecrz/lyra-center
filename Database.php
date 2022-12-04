<?php
    // require_once("config.php");

    class Database {
        private $host = "remotemysql.com";
        private $user = "NsqxjSUDbx";
        private $password = "wLgUwnheJo";
        private $dbName = "NsqxjSUDbx" ;

        private $connection;
        private $error;
        private $stmt;
        private $dbconnected = false;

        function __construct() {
            $dsn = "mysql:host=".$this->host.";dbname=".$this->dbName;
            try {
                $this->connection = new PDO($dsn, $this->user, $this->password);
                $this->dbconnected = true;
            } catch(PDOException $e) {
                $this->error = $e->getMessage();
                $this->dbconnected = false;
            }
        }

        function getError() {
            return $this->error;
        }

        function isConnected() {
            return $this->dbconnected;
        }

        function query($query) {
            $this->stmt = $this->connection->prepare($query);
        }

        function execute() {
            return $this->stmt->execute();
        }

        function resultSet() {
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }

        function rowCount() {
            return $this->stmt->rowCount();
        }

        function single() {
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }

        function bind($param, $value, $type = null) {
            if(is_null($type)) {
                switch(true) {
                    case is_int($value):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                }
            }
            $this->stmt->bindValue($param, $value, $type);
        }
    }

?>