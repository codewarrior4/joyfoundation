<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">
    <title>Joy Givers Charity Foundation - Contact us</title>
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
        <?php include 'header.php' ?>
        <div class="tp-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-breadcumb-wrap">
                            <h2>Contact Us</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><span>Contact</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .tp-breadcumb-area end -->
        <!-- start contact-pg-contact-section -->
        <section class="contact-pg-contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="section-title-s3 section-title-s5">
                            <h2>Our Contacts</h2>
                        </div>
                        <div class="contact-details">
                            <!-- <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p> -->
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <h5>Our Location</h5>
                                    <p style="font-size:30px;font-weight:bold">JGCF office in Nigeria</p>
                                    <p>No 4. Suite 6, Adetutu Plaza, Association Avenue, opposite Governor’s road, off college Bus-Stop, Ikotun, Lagos,</p>
                                    <p>Nigeria</p>
                                    <br> <br>
                                    <p style="font-size:30px;font-weight:bold">JGCF office in USA</p>
                                    <p>2308 Lee Ct, Apt. 206 Tampa, FL 33607</p>
                                    <p>USA</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <h5>Phone</h5>
                                    <p>+2349064085101 </p>
                                    <p>+2347031041484 </p>
                                    <p>+17277290591</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <h5>Email</h5>
                                    <p><a href="mailto:info@joygiverscharity.com">info@joygiverscharity.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="contact-form-area">
                            <div class="section-title-s3 section-title-s5">
                                <h2>Quick Contact Form</h2>
                            </div>
                            <div class="contact-form">
                                <form method="post" action="mail.php" class="contact-validation-active">
                                    <div>
                                        <input type="text" class="form-control"  name="name" id="name" placeholder="Name*">
                                    </div>
                                    <div>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                                    </div>
                                    <div>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone*">
                                    </div>
                                    <div>
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject*">
                                    </div>
                                    <div class="comment-area">
                                        <textarea  name="message"  id="note" placeholder="Message*"></textarea>
                                    </div>
                                    <div class="submit-area">
                                        <button type="submit" name="mail" class="theme-btn">Submit Now</button>
                                        <div id="loader">
                                            <i class="ti-reload"></i>
                                        </div>
                                    </div>
                                    
                                    <?php 
                                        if(isset($_GET['sent'])){
                                            echo '<div class="row clearfix ">
                                                <div id="alert alert-success">You have successfully sent us a message.</div>
                                        </div>';
                                        }
                                    ?>
                                    
                                </form>
                            </div>
                        </div>
                    </div>                    
                </div>

                <div class="row">
                    <div class="col col-xs-12">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3523.593699363143!2d-82.48509018502706!3d27.97572688268156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2c38cc19e776d%3A0x5422eeadc016e230!2s2308%20Lee%20Ct%2C%20Tampa%2C%20FL%2033607%2C%20USA!5e0!3m2!1sen!2sng!4v1640715176947!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>                        
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-pg-contact-section -->
        <!-- news-letter-section start-->
        <section class="news-letter-section s2">
            <div class="container">
                <div class="news-letter-wrap">
                    <div class="row">
                        <div class="col col-lg-10 col-lg-offset-1 col-md-8 col-md-offset-2">
                            <div class="newsletter">
                                <h3>Subscribe to our Newsletter</h3>
                                <p>Please subscribe to our periodic newsletter to obtain updates about our future projects.</p>
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
                                                    echo '<script>location.replace("contact.php")</script>';
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
        <?php include 'footer.php' ?>
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