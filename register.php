<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $mobile_no = $_POST["mobile_no"];
    $lottery_no = $_POST["lottery_no"];
    $registration_date = $_POST["registration_date"];

    // Insert data into MySQL
    $conn = new mysqli("localhost", "root", "", "main_data");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (name, mobile_no, lottery_no, date_of_registration) 
            VALUES ('$name', '$mobile_no', '$lottery_no', '$registration_date')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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
    <link rel="canonical" href="index.php" />
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
                                <a href="#" title=""><img src="images/logo.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="nav-outer clearfix">
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="#">Home</a></li>
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
        <div class="lower-row">
            <div class="auto-container">
                <div class="row clearfix align-items-end">
                    <div class="col-lg-8">
                        <div class="game-awards">
                            <div class="auto-container">
                                <form method="post" id="tm_form1" action="register.php">
                                    <div class="own-prize">
                                        <h4>
                                            Please Enter your Registered Mobile Number and <br />
                                            Lottery Number to continue
                                        </h4>
                                        <ul>
                                            <li><i class="fal fa-user"></i>
                                                <input type="text" class="form-control" placeholder="Full Name" id="name" name="name" required />
                                            </li>
                                            <li><i class="fal fa-mobile"></i>
                                                <input type="text" class="form-control" placeholder="Mobile Number" id="phone1" name="mobile_no" maxlength="10" required />
                                            </li>
                                            <li><i class="fas fa-treasure-chest"></i>
                                                <input type="text" class="form-control" placeholder="Lottery Number" id="lottery" name="lottery_no" maxlength="10" required />
                                            </li>
                                            <li><i class="fas fa-treasure-chest"></i>
                                                <input type="date" class="form-control" placeholder="Created Date" id="date" name="registration_date" required />
                                            </li>

                                            <li><button type="submit" class="btn btn-primary" name="submit" id="cn_submit_me" value="Register">Submit Now</button></li>
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
                                    <li><a href="#">Home</a></li>
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