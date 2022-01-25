<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">
    <title>Joy Givers Charity Foundation - Galleries</title>
    <link href="https://unpkg.com/cd-themify-icons@0.0.1/index.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-default.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/light.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <meta name="keywords" content="charity foundation quotes,charity foundation in usa,charity foundation in nigeria,charity foundation aims and objectives,Joy Givers Charity Foundation,Joy Givers,Joy Givers Charity, Givers Charity Foundation,">
        <link rel="pingback" href="xmlrpc.php">
        <meta property="og:url" content="https://joygiverscharity.com/">
        <meta property="og:description" content="Joy Givers Charity Foundation is a non-profit organization established in Nigeria to serve humanity by extending hands of love and generosity to the less privileged, the downtrodden, the widows, the orphans, the rejected, the abandoned, the lowly in our communities. ">
        <meta property="og:site_name" content="Joy Givers Charity Foundation">
        <meta property="og:image" content="https://joygiverscharity.com/assets/images/logo.png">
        <meta property="og:image:width" content="1500"/>
        <meta property="og:image:height" content="249"/>
        <meta itemprop="name" content="Joy Givers Charity Foundation"/>
        <meta itemprop="url" content="https://joygiverscharity.com/"/>
        <meta itemprop="description" content="Joy Givers Charity Foundation is a non-profit organization established in Nigeria to serve humanity by extending hands of love and generosity to the less privileged, the downtrodden, the widows, the orphans, the rejected, the abandoned, the lowly in our communities."/>
        <meta name="twitter:title" content="Joy Givers Charity Foundation"/>
        <meta name="twitter:url" content="https://joygiverscharity.com/"/>
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:description" content=""/>
</head>

<body class="light-theme">
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <!-- <div class="preloader">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div> -->
        <!-- end preloader -->
        <?php include 'header.php' ?>
        <!-- .tp-breadcumb-area start -->
        <div class="tp-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-breadcumb-wrap">
                            <h2>Single Gallery</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><span>Gallery</span></li>
                                <?php 
                                include 'zeus/connect.php';
                                $id = $_GET['id'];
                                $query = mysqli_query($connect,"SELECT * FROM gallery where id ='$id'");
                                $top = mysqli_fetch_array($query);
                                    $title = $top['title'];
                                    $image = $top['image'];
                                    $youtube = $top['youtube'];
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .tp-breadcumb-area end -->
        <!-- tp-event-details-area start -->
        <div class="tp-case-details-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-12x">
                        <div class="tp-case-details-wrap">
                            <div class="tp-case-details-text">
                                <div id="Description">
                                    <div class="tp-case-details-img">
                                        <center><img loading="lazy=" src="zeus/home/images/<?=$image ?>" alt=""></center>
                                    </div>
                                    <div class="tp-case-content">
                                        <div class="tp-case-text-top">
                                            <h2><?=$title?>.</h2>
                                            <div class="case-b-text">
                                                <p class="display-4 h2 font-weight-bold">Images</p>
                                                <?php 
                                                    $query = mysqli_query($connect,"select * from gallery where title ='$title'");
                                                    while($row= mysqli_fetch_array($query)){?>
                                                        <img src="zeus/home/gallery/<?=$row['description'] ?>" style="max-width: 400px;" class="pb-5 pr-5 img img-fluid" alt="">
                                                   <?php }

                                                ?>
                                            </div>
                                            <div class="case-bb-text">
                                                <h3>Gallery Video</h3>
                                                <div id="Map" class="tab-pane">
                                                    <div class="contact-map">
                                                        <iframe src="<?=$youtube ?>" allowfullscreen allow="accelerometer; autoplay; clipboard-write; encrypted-media;  picture-in-picture" ></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tp-event-details-area end -->
        <!-- news-letter-section start-->
        <section class="news-letter-section s2">
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
                                                    echo '<script>location.replace("galleries.php")</script>';
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