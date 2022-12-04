<?php
    include "admin-classes.php";
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
    <title>Lyra | Enrolled Courses</title>
    <link rel="stylesheet" href="css/admin-style.css" type="text/css">

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
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

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
                                <li ><a href="./aHome.php">HOME</a></li>
                                <li ><a href="./aCourses.php">COURSES</a></li>
                                <li class="active"><a href="./aStudents.php">STUDENTS</a></li>
                                <li class="right"><a href="./signup.html">LOGOUT <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
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
    <section class="pg pg-breadcrumb set-bg" data-setbg="img/banner.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="banner-text normal__breadcrumb__text">
                        <h2></i> Enrolled Courses</h2>
                            <?php
                                if(isset($_GET['uname'])){
                                    echo "<div class='lemony'><a><span><b>";
                                    echo $_GET['uname'];
                                    echo "</b></span</a></div>";
                                }
                            ?>
 
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Normal Breadcrumb End -->
<br>

<!-- Dashboard -->
<div class="container">
    <div class="row">
        <div class="col-lg-10 normal__breadcrumb__text" style="float:none;margin:auto;">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Course</th>
                        <th>Name</th>
                        <th>Instructor</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Payment</th>

                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $studentCourse = new StudentCourse();
                        if(isset($_GET['uname'])){
                            $uname = $_GET['uname'];
                            $studentCourse -> setStudentUsername($uname);
                            $studentCourse -> retrieveStudentCourses($pdo);
                            $rows = $studentCourse -> getCourses();
                            foreach($rows as $row){
                                echo "<tr>";
                                echo "<td>".$row -> crsID."</td>";
                                echo "<td>".$row -> crsName."</td>";
                                echo "<td>".$row -> crsInstructor."</td>";
                                echo "<td>".$row -> crsPrice."</td>";
                                echo "<td>";
                                echo "<form action='' method='post'>";
                                echo "<input type='hidden' name='ecID' value='".$row -> ecID."'>";
                                echo "<select name='status' required>";
                                if($row -> ecStatus == 'pending'){
                                    echo "<option value='pending' selected>Pending</option>";
                                    echo "<option value='active'>Active</option>";
                                    echo "<option value='inactive'>Inactive</option>";
                                }elseif ($row -> ecStatus == 'active'){
                                    echo "<option value='active' selected>Active</option>";
                                    echo "<option value='pending'>Pending</option>";
                                    echo "<option value='inactive'>Inactive</option>";
                                }else{
                                    echo "<option value='inactive' selected>Inactive</option>";
                                    echo "<option value='pending'>Pending</option>";
                                    echo "<option value='active'>Active</option>";
                                }
                                echo "</select></td>";
                                echo "<td><input type='submit' value='SAVE' class='save-button' name='btnSubmit'>"; 
                                echo "</form></td>";
                                echo "</tr>";
                            }        
                        }  
                        if(isset($_POST['btnSubmit']) && isset($_POST['status']) && isset($_POST['ecID'])){
                            $status = $_POST['status'];
                            $ecID = $_POST['ecID'];
                            $studentCourse -> updateEnrollmentStatus($pdo,$ecID,$status);
                        }                              
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>

<!-- Footer Section Begin 
<footer class="footer">
    <div class="page-up">
        <a href="#" class="scroll"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="./index.html">
                        <img src="img/mango manga.png" alt="" width=80px>
                        <img src="img/mm.png" alt="" width=110px>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="./index.html">HOME</a></li>
                        <li ><a href="./courses.html">COURSES</a></li>
                        <li ><a href="./signup.html">STUDENTS</a></li>
                       
                    </ul>
                </div>
            </div>

          </div>
      </div>
  </footer>
  <!-- Footer Section End -->


<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/player.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>


</body>

</html>
