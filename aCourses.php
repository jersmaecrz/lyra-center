<?php
    include "session_checker.php";
    include('message.php');
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

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <link rel="icon" href="img/lyre.png">
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lyra | Courses</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">

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
    
    <!-- Normal Breadcrumb Begin -->
    <section class="pg pg-breadcrumb set-bg bg-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="normal__breadcrumb__text">
                        <h2 style="color:#023047">Courses</h2>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Normal Breadcrumb End -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            <a href="admin-courses.php" class="addBtn float-end">Add Courses</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thread>
                                <tr>
                                    <th>Course ID</th>
                                    <th>Course Name</th>
                                    <th>Instructor</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                </tr>
                            </thread>
                            <tbody>  
                                <?php
                                    $query ="SELECT * FROM courses";
                                    $query_run = mysqli_query($db, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $course)
                                        {
                                
                                            //echo $couse['course'];
                                            ?>
                                            <tr>
                                                <td><?= $course['crsID']; ?></td>
                                                <td><?= $course['crsName']; ?></td>
                                                <td><?= $course['crsInstructor']; ?></td>
                                                <td><?= $course['crsPrice']; ?></td>
                                                <td><?= $course['crsDesc']; ?></td>
                                                <td>
                                                    <a href="courses_view.php?id=<?= filter_var($course['crsID']) ?>" name="displayCourse" class="btn btn-info btn-sm">View</a>
                                                    <a href="courses_edit.php?id=<?= filter_var($course['crsID']) ?>" name="editCourse" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="admin_functions.php" method="POST" class="d-inline">
                                                        <button type="submit" name="deleteCourse" value="<?=$course['crsID'];?>" class="btn btn-danger btn-sm">Delete</a>
                                                    </form>
                                            </tr>
                                            <?php
                                             
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                <tr>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>  
                </div>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>