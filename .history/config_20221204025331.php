<?php 
    $host = "remotemysql.com";
    $user = "NsqxjSUDbx";
    $password = "wLgUwnheJo";
    $dbName = "NsqxjSUDbx" ;
    //Connect to database using PDO 
    try {
        $dsn ="mysql:host=$host;dbname=$dbName";
        $pdo = new PDO($dsn,$user, $password);
        //Check the connection 
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch(PDOException $e) {
        echo "Unable to Connect to DB: ". $e->getMessage();
    }
?>