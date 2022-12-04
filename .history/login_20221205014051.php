<?php 
	include('functions.php');
	include "session_checker.php";
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
        <title>Lyra | Login</title>

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

        <style>
            .signup {text-align: center;}
            .form-label {text-align: right;}
            .form-input {text-align: left;}
            .form-button {align-items: center;}
            form {width: 100%; align-content: center;}
            .flex-container {display: flex; flex-direction: column;}
        </style>
        
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
                            <a href="./index.html">
                                <img src="img/lyre.png" alt="" width=62px>
                                <img src="img/lyra.png" alt="" width=150px>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="header__nav">
                            <nav class="header__menu mobile-menu">
                                <ul>
                                    <li><a href="./sInsdex.php">HOME</a></li>
                                    <li><a href="./sEnrolledCourses.php">COURSES</a></li>
                                    <li><a href="./payschemes.php">PAYMENT</a></li>
                                    <li><a href="./signup.php">SIGN UP</a></li>
                                    <li class="active"><a href="./login.html">LOG IN</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>    
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Content Start -->
        <div class="signup">
            <h1>
                Login
            </h1>
            <form class="container flex-container" action="login.php" method="Post">
                <div class="row" style="margin-top: 25px;">
					<?php echo display_error(); ?>
                    <div class="col-lg-2 form-label">
                        <label for="sUsername">Username:</label>
                    </div>
                    <div class="col-lg-3 form-input">
                        <input type="text" id="sUsername" name="username"><br>
                    </div>
                </div>
				<div class="row">
					<div class="col-lg-2 form-label">
						<label for="sPassword">Password:</label>
					</div>
					<div class="col-lg-3 form-input">
						<input type="password" id="sPassword" name="password"><br>
					</div>
				</div>
                    <div class="row col-lg-5 form-button">
                        <input type="submit" id="signup" name="login_btn" value="Login">
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer Section Begin -->
        <footer class="footer">
            <div class="page-up">
                <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
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
                                <li><a href="./courses.html">COURSES</a></li>
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