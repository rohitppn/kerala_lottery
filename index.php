<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mobile_no = $_POST["mobile_no"];

    $conn = new mysqli("localhost", "root", "", "main_data");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE mobile_no='$mobile_no'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["user_name"] = $row["name"];
        $_SESSION["lottery_name"] = $row["lottery_no"];
        $_SESSION["date_of_registration"] = $row["date_of_registration"];


        header("Location: lottry-finder.php");
    } else {
        echo "Invalid mobile number!";
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <title>Welcome to Megajackpotonlineresult</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
</head>

<body>
    <div class="page-wrapper">
        <header class="main-header header-style-one">
            <div class="header-container">
                <div class="header-upper">
                    <div class="inner-container clearfix">
                        <div class="logo-box">
                            <div class="logo">
                                <a href="https://megajackpotonline.com/" title=""><img src="images/logo.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="nav-outer clearfix">
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="https://megajackpotonline.com/">Home</a></li>
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="payment-details.php">Payment Details</a></li>
                                        <li><a href="winner-list.php">Winner List</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="search-btn">
                                <button type="button" class="theme-btn search-toggler"><span class="fa fa-search"></span></button>
                            </div>
                            <div class="phone-box">
                                <div class="subtitle">Need a Help? Call us</div>
                                <div class="phone">
                                    <a href="tel:18008331355"><span class="fas fa-headphones"></span> 18008331355</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <div class="logo pull-left">
                        <a href="index-2.html" title=""><img src="images/sticky-logo.png" alt="" title="" /></a>
                    </div>
                    <div class="pull-right">
                        <nav class="main-menu clearfix"></nav>
                    </div>
                </div>
            </div>
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-cancel"></span></div>
                <nav class="menu-box">
                    <div class="menu-outer"></div>
                </nav>
            </div>
        </header>
        <section class="banner-section">
            <div class="banner-carousel owl-theme owl-carousel">
                <div class="slide-item">
                    <div class="image-layer" style="background-image: url(images/main-slider/1.jpg);"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content"></div>
                        </div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image: url(images/main-slider/2.jpg);"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <div class="content"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-section">
            <div class="upper-row">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="title-col col-lg-6 col-md-12">
                            <div class="inner">
                                <div class="sec-title">
                                    <div class="upper-text">Online Lottery System</div>
                                    <h2>
                                        Megalottery <br /> Online 2023
                                    </h2>
                                    <div class="lower-line">
                                        <span class="icon"></span>
                                        <span class="line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-col col-lg-6 col-md-12">
                            <div class="inner">
                                <div class="text">
                                    <p>
                                        Playing the lottery is your chance to win big and change your life forever. With Mega Online Lottery it’s easier than ever to enter top drawings in India and around the world. Mega Online lottery site let you buy tickets and participate in our Mega Lottery
                                        Draw.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="lower-row">
            <div class="auto-container" id="lottery">
                <div class="row clearfix align-items-end">
                    <div class="col-lg-8">
                        <div class="game-awards">
                            <div class="auto-container">
                                <form method="post" id="tm_form1" action="index.php">
                                    <div class="own-prize">
                                        <h4>
                                            Please Enter your Registered Mobile Number and <br /> Lottery Number to continue
                                        </h4>
                                        <ul>
                                            <li><i class="fal fa-mobile"></i><input type="text" class="form-control" minlength="10" maxlength="10" placeholder="Mobile Number" id="phone1" name="mobile_no" maxlength="10" required /></li>
                                            <input name="mobile_no" type="hidden" value="mobile_no" />
                                            <li></li>
                                            <li><button type="submit" class="btn btn-primary" name="submit" id="cn_submit_me">Check Now</button></li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="indina-lottery"><img src="images/lottery.png" alt="" /></div>
                    </div>
                </div>
            </div>


            <div class="fixedenter" style="display: none;">
                <div class="own-prize">
                    <h4>Please Enter your Registered Mobile Number to continue</h4>
                    <form method="post" id="tm_form1" action="index.php">
                        <ul>
                            <li><i class="fal fa-mobile"></i><input type="text" class="form-control" minlength="10" maxlength="10" placeholder="Mobile Number" id="phone1" name="mobile_no" maxlength="10" required /></li>
                            <input name="task" type="hidden" value="login" />
                            <li></li>
                            <li><button type="submit" class="btn btn-primary" name="submit" id="cn_submit_me">Check Now</button></li>
                        </ul>
                    </form>
                </div>
            </div>

            <!--Main Footer-->
            <section class="main-footer">
                <div class="image-layer" style="background-image:url(images/background/footer-bg.jpg)"></div>
                <div class="widgets-section">
                    <div class="auto-container">
                        <div class="inner">
                            <!--Logo-->
                            <div class="footer-logo"><a href="https://megajackpotonline.com/" title=""><img src="images/footer-logo.png" alt="" title=""></a></div>

                            <!--Footer Nav-->
                            <nav class="footer-nav">
                                <ul class="clearfix">
                                    <li><a href="https://megajackpotonline.com/">Home</a></li>
                                    <li><a href="about.php">About </a></li>
                                    <li><a href="payment-details.php">Payment Detials</a></li>
                                    <li><a href="winner-list.php">Winner List</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <li><a href="privacy.php">Privacy</a></li>
                                    <li><a href="terms.php">Terms</a></li>
                                </ul>
                            </nav>

                            <div class="footer-separator">
                                <div class="icon"></div>
                            </div>

                            <!--Copyright-->
                            <div class="copyright">&copy; Copyright Mega Lottery Tickets Result 2023. All Rights Reserved.</div>

                        </div>

                    </div>
                </div>
            </section>

        </div>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-up-arrow"></span></div>

        <script src="js/jquery.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/scrollbar.js"></script>
        <script src="js/owl.js"></script>
        <script src="js/isotope.js"></script>
        <script src="js/validate.js"></script>
        <script src="js/appear.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/element-in-view.js"></script>
        <script src="js/script.js"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('[data-toggle="tooltip"]').tooltip();
            });

            function isNumberKey(evt) {
                var charCode = (evt.which) ? evt.which : evt.keyCode;
                if (charCode != 45 && charCode != 32 && charCode > 31 && (charCode < 48 || charCode > 57)) return false;
                return true;
            } // isNumberKey
            function validateEmail(email) {
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            }
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.fixedenter').css('display', '');
            });
        </script>
</body>

</html>