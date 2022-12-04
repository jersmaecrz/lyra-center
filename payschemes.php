<!DOCTYPE html>
<html lang="zxx">

    <head>
        <link rel="icon" href="img/lyre.png">
        <meta charset="UTF-8">
        <meta name="description" content="Anime Template">
        <meta name="keywords" content="Anime, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Payment Schemes</title>

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
        </div> -->

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
                                    <li><a href="./index.html">HOME</a></li>
                                    <li><a href="./courses.html">COURSES</a></li>
                                    <li class="active"><a href="./payschemes.php">PAYMENT</a></li>
                                    <li><a href="./signup.php">SIGN UP</a></li>
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

        <!-- Content -->
        <div class="container" style="margin-top: 50px">
            <div class="row">
                <div class="normal__breadcrumb__text" style="float:none;margin:auto;">
                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Method</th>
                                <th>Bank</th>
                                <th>Account No</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                require_once("PaymentScheme.php");
                                $payscheme = new PaymentScheme();
                                $schemes = $payscheme->getPaymentSchemes();
                                
                                foreach($schemes as $scheme) { ?>
                                    <tr>
                                        <td style="padding: 10px"><?php echo $scheme->schemeID;?></td>
                                        <td style="padding: 10px"><?php echo $scheme->method;?></td>
                                        <td style="padding: 10px"><?php echo $scheme->bank;?></td>
                                        <td style="padding: 10px"><?php echo $scheme->acctNo;?></td>
                                    </tr>
                                <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

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