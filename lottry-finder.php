<?php
session_start();

if (!isset($_SESSION["user_id"])) {
  header("Location: index.php");
  exit();
}

$user_name = $_SESSION["user_name"];
$lottery_name = $_SESSION["lottery_name"];
$date_of_registration = $_SESSION["date_of_registration"];


?>


<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="utf-8" />
  <title>Welcome to Megajackpotonlineresult.com</title>
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
    <style>
      table.GeneratedTable {
        width: 100%;
        border-collapse: collapse;
        color: #000000;
        border-radius: 5px;
        border: 4px solid #f4433636;
        background-image: url('images/bgs.jpg');
        background-position: center;
        background-repeat: no-repeat;
      }

      table:after {
        content: "";
        background: url(image.png);
        opacity: 0.5;
        /* set your opacity */
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        position: absolute;
        z-index: -1;
      }

      table.GeneratedTable td,
      table.GeneratedTable th {
        border-width: 2px;
        border-color: #000;
        border-style: solid;
        padding: 0px;
      }

      table.GeneratedTable thead {}

      h2 {
        background-color: #ff5722;
        color: #fff;
        font-size: 20px;
        text-align: center;
        padding: 5px;
      }

      .box {
        width: 100px;
        margin: 0px auto;
      }

      .bg-yellow {
        background: #ff5722;
        border: 1px solid #d50303 !important;
      }

      .bg-green {
        background: #4caf50;
        border: 1px solid #18781c !important;
      }

      blink {
        animation: 2s linear infinite condemned_blink_effect;
        color: red;
        font-size: 25px;
        font-weight: bold;
      }

      @keyframes condemned_blink_effect {
        0% {
          visibility: hidden;
        }

        50% {
          visibility: hidden;
        }

        100% {
          visibility: visible;
        }
      }

      .line-bottom {
        border-bottom: 3px solid #ed6221;
        margin: auto;
        width: 50%;
        padding: 1px;
      }
    </style>

    <div class="lower-row">
      <div class="auto-container">
        <div class="row clearfix align-items-end">
          <div class="col-lg-12">
            <div class="game-awards d-flex justify-content-center align-items-center">

              <div class="auto-container">
                <!-- CSS Code: Place this code in the document's head (between the 'head' tags) -->


                <div class="table-responsive">

                  <div class="text-center border border-3 rounded my-5 py-5">
                    <blink>LIVE NOW</blink>
                    <div class="d-flex justify-content-center mt-3 p-3">
                      <div class="card">

                        <div class="card-body">
                          <h5 class="card-title">Congratulations
                            <div class="line-bottom"></div>
                          </h5>
                          <h5 class="card-title"> <?php echo $user_name; ?> <div class="line-bottom"></div>
                          </h5>
                          <h5 class="card-title">Winning amount us Rs.- <strong>8,00,000</strong></h5>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-center">
                      <div class="my-3">
                        <h3 class="text-danger">Mega Lottery Tickets Result</h3>
                        <div class="d-flex justify-content-between  align-items-center px-3 pt-3">
                          <div class="box text-center text-light bg-green border border-dark rounded p-1 m-1">Result</div>
                          <div class=" text-center text-light bg-yellow border border-dark rounded px-2 py-1 m-1"> <?php echo $date_of_registration; ?> </div>
                        </div>
                      </div>
                    </div>
                    <h2 class="py-3">1<small>st</small> Price -Rs 12,00,00,000 /-</h2>
                    <div class="d-flex justify-content-center">
                      <div class="box text-center border border-dark rounded p-1 m-3">SK 24468</div>
                    </div>
                    <h2 class="py-3">Consolidation Price -Rs 1,00,000 /-</h2>
                    <div class="d-flex flex-wrap justify-content-center">
                      <div class="box text-center border border-dark rounded p-1 m-3">KL 15546</div>
                      <div class="box text-center border border-dark rounded p-1 m-3">KL 23686</div>
                      <div class="box text-center border border-dark rounded p-1 m-3">KL 09220</div>
                      <div class="box text-center border border-dark rounded p-1 m-3">KL 00953</div>
                      <div class="box text-center border border-dark rounded p-1 m-3">KL 17780</div>
                    </div>
                    <h2 class="py-3">2<small>nd</small> Price -Rs 50,00,000 /-</h2>
                    <div class="d-flex justify-content-center">
                      <div class="box text-center border border-dark rounded p-1 m-3">KL 73980</div>
                    </div>

                    <h2 class="py-3">3<small>rd</small> Price -Rs 12,00,000 /-</h2>
                    <div class="d-flex flex-wrap justify-content-center">
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 21710</div>

                      <div class="box text-center border border-dark rounded p-1 m-1">KL 10401</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 59006</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 66465</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 97295</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 88124</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 75449</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 25469</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 02334</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 84729</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 94037</div>
                    </div>

                    <h2 class="py-3">4<small>th</small> Price -Rs 8,00,000 /-</h2>
                    <div class="d-flex justify-content-center">
                      <div class="d-flex flex-wrap justify-content-center">
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 89822</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL <?php echo $lottery_name; ?></div>
                        <div class="box text-center border border-dark rounded p-1 m-1" data-toggle="tooltip" data-placement="top" title="Congratulations">KL 17379</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 23980</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 09238</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 06850</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 20424</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 69666</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 60221</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 24525</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 59673</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 23436</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 65093</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 95429</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 93517</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 11787</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 94685</div>
                      </div>
                    </div>

                    <h2 class="py-3">5<small>th</small> Price -Rs 2,00,000 /-</h2>
                    <div class="d-flex justify-content-center">

                      <div class="d-flex flex-wrap justify-content-center">
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 74635</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 23444</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 84277</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 01941</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 23818</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 18385</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 82639</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 61027</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 19452</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 79537</div>

                        <div class="box text-center border border-dark rounded p-1 m-1">KL 08141</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 60434</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 70771</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 15661</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 80799</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 11138</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 04239</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 87541</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 21315</div>
                        <div class="box text-center border border-dark rounded p-1 m-1">KL 72521</div>
                      </div>
                    </div>
                    <h2 class="py-3">6<small>th</small> Price -Rs 1,00,000 /-</h2>
                    <div class="d-flex flex-wrap justify-content-center">
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 70402</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 04003</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 04636</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 69391</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 23211</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 01559</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 21240</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 25514</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 96559</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 13846</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 84789</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 73960</div>

                      <div class="box text-center border border-dark rounded p-1 m-1">KL 24142</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 65876</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 77022</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 61299</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 74758</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 77375</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 67152</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 62950</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 66115</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 86415</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 64457</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 86275</div>

                    </div>
                    <h2 class="py-3">7<small>th</small> Price -Rs 10,000 /-</h2>
                    <div class="d-flex flex-wrap justify-content-center">
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 65111</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 91107</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 17631</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 78480</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 74151</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 60713</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 93614</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 92396</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 12266</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 89749</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 20076</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 87675</div>

                      <div class="box text-center border border-dark rounded p-1 m-1">KL 69881</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 75886</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 07163</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 16817</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 45339</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 85174</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 95843</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 22179</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 62658</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 63223</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 65667</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 99984</div>

                      <div class="box text-center border border-dark rounded p-1 m-1">KL 73119</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 15626</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 67872</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 80083</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 78128</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 01754</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 90472</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 25274</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 87513</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 01523</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 01774</div>
                      <div class="box text-center border border-dark rounded p-1 m-1">KL 17244</div>
                    </div>
                  </div>

                </div>
              </div>
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