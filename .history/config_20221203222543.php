<?php 
    $host = "remotemysql.com";
    $user = "NsqxjSUDbx";
    $password = "wLgUwnheJo";
    $dbName = "DB" ;
    //Connect to database using PDO 
    try {
        $dsn ="mysql:host=$host;dbname=$dbName";
        $pdo = new PDO($dsn,$user, $password);
        //Check the connection 
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Successfully Connected to the Database.";
    } catch(PDOException $e) {
        echo "Unable to Connect to DB: ". $e->getMessage();
    }
?>