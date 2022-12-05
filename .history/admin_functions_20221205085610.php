<?php
include "session_checker.php";

// connect to database
$sname = "remotemysql.com";
$uname = "NsqxjSUDbx";
$password = "wLgUwnheJo";
$db_name = "NsqxjSUDbx";

$db = mysqli_connect($sname, $uname, $password, $db_name);

if (!$db) {
	echo "Connection failed!";
	exit();
}
if(isset($_POST['deleteCourse']) && isset($_POST['crsID'])){
    $course_id = mysqli_real_escape_string($db, $_POST['crsID']);
    $query = "DELETE FROM `courses` WHERE `courses`.`crsID` = '$course_id';";
    $query_run = mysqli_query($db, $query)or die(mysqli_error($db));

    if($query_run)
    {
        $_SESSION['message'] = "Course Deleted Successfully";
        header("Location: aCourses.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Course Not Deleted";
        header("Location: aCourses.php");
        exit(0);
    }
}

if(isset($_POST['update_course']))
{
    
    $crsID = mysqli_real_escape_string($db, $_POST['crsID']);
    $crsName = mysqli_real_escape_string($db, $_POST['crsName']);
    $crsInstructor = mysqli_real_escape_string($db, $_POST['crsInstructor']);
    $crsPrice = mysqli_real_escape_string($db, $_POST['crsPrice']);
    $crsDesc = mysqli_real_escape_string($db, $_POST['crsDesc']);
    echo $crsID;
    echo $crsName;
    echo $crsInstructor;
    echo $crsPrice;
    echo $crsDesc;

    $query = "UPDATE `courses` SET `crsID`='$crsID', `crsName` ='$crsName', `crsInstructor`='$crsInstructor', `crsPrice`=$crsPrice, `csrDesc`='$crsDesc' WHERE `crsID`='$crsID' ";

    $query_run = mysqli_query($db, $query)or die(mysqli_error($db));;

    if($query_run)
    {
        $_SESSION['message'] = "Course Updated Successfully";
        header("Location: aCourses.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Course Not Updated";
        //header("Location: aCourses.php");
        exit(0);
    }
}

if(isset($_POST['save_course']))
{
    $crsID = mysqli_real_escape_string($db, $_POST['crsID']);
    $crsName = mysqli_real_escape_string($db, $_POST['crsName']);
    $crsInstructor = mysqli_real_escape_string($db, $_POST['crsInstructor']);
    $crsPrice = mysqli_real_escape_string($db, $_POST['crsPrice']);
    $crsDesc = mysqli_real_escape_string($db, $_POST['crsDesc']);


    $query = "INSERT INTO courses (crsID, crsName, crsInstructor, crsPrice, crsDesc) VALUES 
        ('$crsID','$crsName', '$crsInstructor', '$crsPrice', '$crsDesc')";

    $query_run = mysqli_query($db, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Course Added Successfully";
        header("Location: aCourses.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Course Not Added";
        header("Location: aCourses.php");
        exit(0);
    }

}
?>
