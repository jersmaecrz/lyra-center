<?php
session_start();
require 'config.php';

if(isset($_POST['delete_course']))
{
    $course_id = mysqli_real_escape_string($db, $_POST['delete_course']);
    $query = "DELETE FROM courses WHERE id='$course_id' ";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Course Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Course Not Deleted";
        header("Location: index.php");
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

    $query = "UPDATE courses SET crsName ='$crsName', crsInstructor='$crsInstructor', csrPrice='$crsPrice', csrDesc='$crsDesc' WHERE id='$course_id' ";

    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Course Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Course Not Updated";
        header("Location: index.php");
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


    $query = "INSERT INTO courses (crsName, crsInstructor, crsPrice, crsDesc) VALUES 
        ('$crsName', '$crsInstructor', '$crsPrice', '$crsDesc')";

    $query_run = mysqli_query($db, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Course Added Successfully";
        header("Location: admin-courses.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Course Not Added";
        header("Location: admin-courses.php");
        exit(0);
    }

}
?>
