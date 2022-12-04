<?php
    include "student-classes.php";
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
    <title>Lyra | Home</title>
    <link rel="stylesheet" href="css/student-style.css" type="text/css">

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
    <!-- Page Preloder 
    <div id="preloder">
        <div class="loader"></div>
    </div>-->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="header__logo">
                        <a href="./index.php">
                            <img src="img/lyre.png" alt="" width=62px>
                            <img src="img/lyra.png" alt="" width=150px>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.php">HOME</a></li>
                                <li ><a href="./sCoursesEnroll.php">COURSES</a></li>
                                <li ><a href="./signup.html">SIGN UP</a></li>
                                <li><a href="./login.html">LOG IN</a></li>
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
    <section class="normal-breadcrumb set-bg" data-setbg="img/breadcrumb.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="normal__breadcrumb__text">
                        <h2>Lyra Center</h2>
                        <p>Enhance your skills in computer programming courses</p><br>
                        <div class="lemony"><a href="#Courses"><span><b>Enroll Now</b></span> <i class="fa fa-angle-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Normal Breadcrumb End -->
<br>


<div class="container">

        <div class="row">

                <div class="col-lg-8">
                    <div class="normal__breadcrumb__text" id="setblack">
                            <br><br><h3><b>Ready for boom boom pow?</h3>

                        <div class="a">
                            <br><h4 align="justify">Lyra offers a variety of computer programming courses and offers different languages from C++ to Python to Java and many more! Learn how to code now and click enroll now to get started!</h4>

                        </div>
                    </div>
                </div>
</div>
</div>
<br>
<br>
<!-- Courses -->
<div class="container" id="Courses">
    <div class="row">
            <div class="col-lg-8">
                <div class="normal__breadcrumb__text" id="setblack">
                        <br><br><h3><b>Courses</h3>
                </div>
            </div>
    </div>
</div><br>
<div class="container">
  <div class="row justify-content-md-center">
    <?php
        $courses = new Courses();
        $courses -> retrieveCourses($pdo);
        $rows = $courses -> getCourses();
        foreach($rows as $row){
            echo "";

     
    ?>
    <div class="col-sm-6">
    <div class="card mb-2">
        <div class="card-body">
            <h5 class="card-title"><b><?php echo $row-> crsName ?></b></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $row-> crsInstructor ?></h6>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo "PHP". $row-> crsPrice ?></h6>

            <p class="card-text"><?php echo $row-> crsDesc ?></p>
            <div class="enroll"><a href="sEnroll.php">Enroll Course <i class="fa fa-angle-right"></i></a></div>

        </div>
        </div>
    
    </div>
    <br>
    <?php
    }
    ?>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="./index.php">
                        <img src="img/mango manga.png" alt="" width=80px>
                        <img src="img/mm.png" alt="" width=110px>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="./index.php">HOME</a></li>
                        <li><a href=".">COURSES</a></li>
                        <li><a href="./signup.html">SIGN UP</a></li>
                        <li><a href="./login.html">LOG IN</a></li>
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
