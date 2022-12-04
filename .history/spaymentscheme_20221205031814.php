<?php
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
    <title>Lyra | Payment Proof</title>
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

    <style>
        #boxxx {
            background: #D4E3E5;
        }
        .butones{
                background: #FFDA0E;
                font-size: 20px;
        }
        #gitna{
            text-align: center;
        }
        .pad{
            padding-left: 300px;
       
        }

        .padd{
            padding-left: 400px;
       
        }
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
                            <li class="active"><a href="./sIndex.php">HOME</a></li>
                                <li><a href="./sEnrolledCourses.php">COURSES</a></li>
                                <?php
                                    if(isset($_SESSION['user']) ){ 
                                        echo"<li class='right'><a href='./logout.php'><i class='fa fa-sign-out' aria-hidden='true'></i> LOGOUT</a></li>";
                                    }else{
                                        echo"<li><a href='./signup.php'>SIGN UP</a></li>";
                                        echo"<li class='right'><a href='./login.php'><i class='fa fa-sign-in' aria-hidden='true'></i> LOGIN</a></li>";
                                    }
                                ?>
                        </nav>
                    </div>
                </div>
                
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->


<br><br><br>

<div class="container">

        <div class="row">

                <div class="col-lg-12" id="boxxx">
                    <div class="normal__breadcrumb__text" id="setblack">


                        <br><br><h3 id="gitna"><b>Select your payment option.</h3><br>
                                <?php if (isset($_GET['error'])): ?>
                                    <p ><?php echo $_GET['error']; ?></p>
                                <?php endif ?>
                                 <form action="student-payment.php" method="post">
                                 <input type="hidden" id="online" name="cID" value="online">

                                <div class="pad">
                                <label for="acctNo">Payment Method</label><br>

                                <input type="radio" id="online" name="method" value="online">
                                <label for="online">Online Payment</label>

                                <input type="radio" id="otc" name="method" value="otc">
                                <label for="otc">Over-the-Counter</label>

                                <input type="radio" id="bt" name="method" value="bt">
                                <label for="bt">Bank Transfer</label>

                                <input type="radio" id="checks" name="method" value="checks">
                                <label for="checks">Checks</label>
                                </div>

                                <br><br>

                                <div class="pad">
                                <label for="acctNo">Bank</label><br>

                                <input type="radio" id="gcash" name="bank" value="gcash">
                                <label for="gcash">G-Cash</label>

                                <input type="radio" id="bdo" name="bank" value="bdo">
                                <label for="bdo">BDO</label>

                                <input type="radio" id="bpi" name="bank" value="bpi">
                                <label for="bpi">BPI</label>
                                </div>

                                <br><br>
                                <div class="pad">
                                <label for="acctNo">Account Number</label>
                                <input type="text" id="acctNo" name="acctNo"><br>
                                </div>
                                      
                        </div>
                        <br><br><br>

                        </div>
                        <br><br><br>
                    </div>
                </div>
</div>
<br><br><br>

                <div class="col-lg-12 text-center">
                <?php
                    if(isset($_GET['id'])){
                        echo "<a  class='butonesTxt butones' href='sEnroll.php?id=".filter_var($_GET['id'])."' name='btnNext' id='button' >Back</a></tr>";
                        echo "<input type='submit' name='nextBtn' class='inpt'></tr>";
                    }
                   
                ?>
                </div></form>

<br><br><br><br>




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
                    <li><a href="./sIndex.php">HOME</a></li>
                        <li  class="active"><a href="./sEnrolledCourses.php">COURSES</a></li>
                        <?php
                            if(isset($_SESSION['user']) ){ 
                                echo"<li><a href='./logout.php'><i class='fa fa-sign-out' aria-hidden='true'></i> LOGOUT</a></li>";
                            }else{
                                echo"<li><a href='./signup.php'>SIGN UP</a></li>";
                                echo"<li><a href='./login.php'><i class='fa fa-sign-in' aria-hidden='true'></i> LOGIN</a></li>";
                            }
                        ?> 
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
