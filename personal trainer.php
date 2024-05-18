<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Anamol Gym center</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="black-bg">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="img/TT.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php"><img src="img/TT.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="course.php">Course</a></li>
                                    <li><a href="pricing.php">Pricing</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    
                                </ul>
                            </nav>
                        </div>          
                        <!-- Header-btn -->
                        <div class="header-btns d-none d-lg-block f-right">
                        <?php
    require_once './isLogged.php'; 
    if (isLoggedIn()) {
        echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userModal">View Profile</button>';
    } else {
        echo '<a href="./user/loginform.php" class="btn btn-primary">Login</a>';
    }
    ?>
</div>
                       <!-- Mobile Menu -->
                       <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalLabel">User Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                if (isLoggedIn()) {
                    $username = $_SESSION["username"]; 
                    echo "<p>Welcome, $username!</p>";
                } else {
                    echo "<p>Please log in to view user details.</p>";
                }
                ?>
            </div>
            <div class="modal-footer">
            <a href="./user/logout.php" class="btn btn-danger">Logout</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Personal Training</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

 <!-- img -->
 <div class="right-img wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
    <img src="assets/img/gallery/about.png" alt=""
    
    
</div>
</div>
<div class="left-content2">
<!-- section tittle -->
<div class="section-tittle2 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
    <div class="front-text">
        <h2 class="">personal trainer</h2>
        <p>Whether you’re new to exercising or a fitness pro, we’re here  support  
        <p>to provide you with personalized coaching and inside and</p>
        <p>outside the club. Our professional programming, tools</p>
        <p class="mb-40">and guidance will help you stay on track, reach your goals, and get to a healthier place. </p>
        <a href="personal trainer.php" class=""></a>
    </div>
</div>
 <!-- ? services-area -->
 <section class="services-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                <div class="single-services mb-40">
                    <div class="features-icon">
                        <img src="assets/img/icon/icon1.svg" alt="">
                    </div>
                    <div class="features-caption">
                        <h3>Location</h3>
                        <p>Chabahil-2(sifal chock)</p> 
                           <p>kathmandu-Nepal</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="single-services mb-40">
                    <div class="features-icon">
                        <img src="assets/img/icon/icon2.svg" alt="">
                    </div>
                    <div class="features-caption">
                        <h3>Phone</h3>
                        <p>+9779848271282</p>
                        <p>+9779703293473</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="single-services mb-40">
                    <div class="features-icon">
                        <img src="assets/img/icon/icon3.svg" alt="">
                    </div>
                    <div class="features-caption">
                        <h3>Email</h3>
                        <p>Np03A190390@heraldcollege.edu.np</p>
                        <p>kedemlimbuanamol@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<footer>
<!--? Footer Start-->
<div class="footer-area black-bg">
    <div class="container">
        <div class="footer-top footer-padding">
            <!-- Footer Menu -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-footer-caption mb-50 text-center">
                        <!-- logo -->
                        <div class="footer-logo wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <a href="index.php"><img src="img/TT.png" alt=""></a>
                        </div>
                        <!-- Menu -->
                        <!-- Header Start -->
                        <div class="header-area main-header2 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                            <div class="main-header main-header2">
                                <div class="menu-wrapper menu-wrapper2">
                                    <!-- Main-menu -->
                                    <div class="main-menu main-menu2 text-center">
                                        <nav>
                                            <ul>
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="offer.php">course</a></li>
                                                <li><a href="pricing.php">Pricing</a></li>
                                                <li><a href="gallery.php">Gallery</a></li>
                                                <li><a href="contact.php">Contact</a></li>
                                                
                                            </ul>
                                        </nav>
                                    </div>   
                                </div>
                            </div>
                        </div>
                        <!-- Header End -->
                        <!-- social -->
                        <div class="footer-social mt-30 wow fadeInUp" data-wow-duration="3s" data-wow-delay=".8s">
                           <a href="https://www.facebook.com/anamol.limbu.963/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/anamol.limbu.963/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="row d-flex align-items-center">
                <div class="col-lg-12">
                    <div class="footer-copy-right text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart" aria-hidden="true"></i> <a href="https://www.AnamolGymcenter" target="_blank">Anamol Gym center</a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
<a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>