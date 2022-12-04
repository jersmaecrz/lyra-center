<?php
    require_once("Student.php");
    if(isset($_POST['signup'])) {
        $student = new Student();
        $student->setSUsername($_POST['sUsername']);
        $student->setSName($_POST['sName']);
        $student->setSEmail($_POST['sEmail']);
        $student->setSPassword(md5($_POST['sPassword']));
        $student->register();
                
        echo "<script>alert('Data saved successfully!'); document.location = 'index.html'</script>";
    }
?>