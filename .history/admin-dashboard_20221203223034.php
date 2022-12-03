<?php
    require_once("config/config.php");

    //Count all rows
    $query = "SELECT * FROM emp_tbl";
    $stmt = $pdo-> prepare($query);
    $stmt -> execute([$start]);
    $rows = $stmt -> fetchAll();  
    $rowCount = $stmt->rowCount();
    echo "<h3>Number of All Employee Rows: $rowCount</h3>";

?>