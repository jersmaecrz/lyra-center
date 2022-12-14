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
        #boxx {
            border-style: dotted;
            color: #078392;
            padding: 100px;
        }
        #boxxx {
            background: #D4E3E5;
        }
        .butones{
                background: #FFDA0E;
                font-size: 20px;
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
                                <li class="active"><a href="./index.html">HOME</a></li>
                                <li ><a href="./courses.html">COURSES</a></li>
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

                <div class="col-lg-12 text-center" id="boxxx">
                    <div class="normal__breadcrumb__text" id="setblack">
                            <br><br><h3><b>Kindly upload your proof of payment here.</h3><br>
                                <?php if (isset($_GET['error'])): ?>
                                    <p ><?php echo $_GET['error']; ?></p>
                                <?php endif ?>
                                 <form action="upload.php" id="boxx"
                                       method="post" 
                                       enctype="multipart/form-data">
                                       <?php
                                            if(isset($_GET['id'])){
                                                echo "<input type='hidden' name='payID' value='".$_GET['id']."'>";
                                            }
                                       ?>
                                       <br>
                                       <input 
                                              type="file" 
                                              name="my_image">

                                       <input 
                                            class ="butones"
                                              type="submit" 
                                              name="submit"
                                              value="Upload">
                                        <br><br><br>

                                 </form>
                        </div>
                        <br><br><br>
                    </div>
                </div>
</div>
<br><br><br>

                <div class="col-lg-12 text-center">
                    <?php
                     if(isset($_GET['id'])){
                        echo "<a  class='butonesTxt butones' href='spaymentscheme.php?id=".filter_var($_GET['id'])."' name='btnNext' id='button' >Back</a></tr>";
                    }

                    ?>
                </div>
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
