<?php
include "session_checker.php";

$sname = "remotemysql.com";
$uname = "NsqxjSUDbx";
$password = "wLgUwnheJo";
$db_name = "NsqxjSUDbx";

$db = mysqli_connect($sname, $uname, $password, $db_name);

if (!$db) {
    echo "Connection failed!";
    exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="img/lyre.png">
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Course</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
  <body>
    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="header__logo">
                        <a href="./aHome.php">
                            <img src="img/lyre.png" alt="" width=62px>
                            <img src="img/lyra.png" alt="" width=150px>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="./aHome.php">HOME</a></li>
                                <li class="active"><a href="./aCourses.php">COURSES</a></li>
                                <li><a href="./aStudents.php">STUDENTS</a></li>
                                <li><a href="./payschemes.php">PAY SCHEME</a></li>
                                <li><a href="./logout.php"> <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
    <div class="container mt-5">

       <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Courses
                            <a href="aCourses.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id']))
                        {
                            $course_id = mysqli_real_escape_string($db, $_GET['id']);
                            $query = "SELECT * FROM courses WHERE crsID='$course_id' ";
                            $query_run = mysqli_query($db, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $course = mysqli_fetch_array($query_run);
                                ?>
                                <form action="admin_functions.php" method="POST">

                                <div class="mb-3">
                                    <label>Course ID</label>
                                    <input type="text" name="crsID" value="<?=$course['crsID'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Course Name</label>
                                    <input type="text" name="crsName" value="<?=$course['crsName'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Instructor</label>
                                    <input type="text" name="crsInstructor" value="<?=$course['crsInstructor'];?>" class="form-control">
                                </div>
                                <div class="mb-3">

                                    <label>Price</label>
                                    <input type="text" name="crsPrice" value="<?=$course['crsPrice'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Description</label>
                                    <input type="text" name="crsDesc" value="<?=$course['crsDesc'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="update_course" class="btn btn-primary" style="text-align:center">
                                        Update course
                                    </button>
                                </div>
                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>