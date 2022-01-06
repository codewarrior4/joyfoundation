<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">
    <title>Joy Givers Charity Foundation - Gallery</title>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/light.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="light-theme">
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
        <!-- end preloader -->
       <?php include 'header.php' ?>
        <!-- .tp-breadcumb-area start -->
        <div class="tp-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-breadcumb-wrap">
                            <h2>Our Gallery</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><span>Gallery</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .tp-breadcumb-area end -->
        
        <!-- start event-section -->
        <section class="event-section section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span>Moments</span>
                    <h2>View Our Moments</h2>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="event-grids clearfix">
                            <div class="grid">
                                <div class="img-holder">
                                    <img loading="lazy=" src="assets/images/event/img-1.jpg" alt>
                                </div>
                                <div class="details">
                                    <ul class="entry-meta">
                                        <li><a href="#"><i class="ti-calendar"></i> 20 sep 2018</a></li>
                                    </ul>
                                    <h3><a href="galleries.php">Education for All Children</a></h3>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="assets/images/event/img-2.jpg" alt>
                                </div>
                                <div class="details">
                                    <ul class="entry-meta">
                                        <li><a href="#"><i class="ti-calendar"></i> 20 sep 2018</a></li>
                                    </ul>
                                    <h3><a href="galleries.php">Food for All Everyone</a></h3>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="assets/images/event/img-3.jpg" alt>
                                </div>
                                <div class="details">
                                    <ul class="entry-meta">
                                        <li><a href="#"><i class="ti-calendar"></i> 20 sep 2018</a></li>
                                    </ul>
                                    <h3><a href="galleries.php">Free Treatment</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end event-section -->
        <!-- .tp-counter-area start -->
       
        <!-- .tp-counter-area end -->
        <!-- news-letter-section start-->
        <section class="news-letter-section s2 ds2">
            <div class="container">
                <div class="news-letter-wrap">
                    <div class="row">
                        <div class="col col-lg-10 col-lg-offset-1 col-md-8 col-md-offset-2">
                            <div class="newsletter">
                                <h3>Subscribe to our Newsletter</h3>
                                <p>Please subscribe to our periodic newsletter to obtain updates about our future projects. .</p>
                                <div class="newsletter-form">
                                <form method="post" action="">
                                        <div>
                                            <input type="email" name="email" placeholder="Enter Your Email" required class="form-control">
                                            <button class="bigCursor" name="submit" type="submit">Subscribe</button>
                                        </div>
                                        <?php
                                            include 'zeus/connect.php';

                                            if (isset($_POST['submit']))
                                            {
                                                
                                                $email = $_POST['email'];
                                                $query = mysqli_query($connect, "INSERT INTO newsletters values('','$email',now())");
                                                if($query){
                                                    //  header('Location:index.php');
                                                    echo '<script>swal("Good job!", "You have subscribed to our newsletter!", "success")</script>';
                                                    echo '<script>location.replace("gallery.php")</script>';
                                                } else{
                                                    echo mysqli_error($query);
                                                }
                                            }
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- news-letter-section end-->
        <div class="tp-ne-footer">
            <?php include 'footer.php' ?>
        </div>
    </div>
  
    <div id="magic-cursor">
        <div id="ball">
            <div id="ball-drag-x"></div>
            <div id="ball-drag-y"></div>
            <div id="ball-loader"></div>
        </div>
    </div>
    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>

</html>