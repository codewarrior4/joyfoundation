<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">
    <title>Joy Givers Charity Foundation - Event</title>
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
    <meta name="twitter:description" conten
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
                            <h2>Our Event</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><span>Event</span></li>
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
                    <!-- <span>Our Events</span> -->
                    <h2>Our Events</h2>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="event-grids clearfix">
                            <?php 
                                include 'zeus/connect.php';
                                $query = mysqli_query($connect,"SELECT * FROM events order by date desc limit 3");
                                if (isset($_GET['pageno'])) {
                                    $pageno = $_GET['pageno'];
                                } else {
                                    $pageno = 1;
                                }
                                $no_of_records_per_page = 10;
                                $offset = ($pageno-1) * $no_of_records_per_page;
                                $total_pages_sql = "SELECT COUNT(*) FROM events";
                                $result = mysqli_query($connect,$total_pages_sql);
                                $total_rows = mysqli_fetch_array($result)[0];
                                $total_pages = ceil($total_rows / $no_of_records_per_page);
                                $sql = "SELECT * FROM events LIMIT $offset, $no_of_records_per_page";
                                $res_data = mysqli_query($connect,$sql);
                                while($row = mysqli_fetch_array($res_data)){ ?>
                                    <div class="grid">
                                        <div class="img-holder">
                                            <img loading="lazy=" src="zeus/home/images/<?=$row['image'] ?>" alt>
                                        </div>
                                        <div class="details">
                                            <ul class="entry-meta">
                                                <li><a href="#"><i class="ti-calendar"></i> <?=$row['date'] ?></a></li>
                                            </ul>
                                            <h3><a href="events.php?id=<?=$row['id'] ?>"><?=$row['title'] ?></a></h3>
                                        </div>
                                    </div>
                                <?php } ?>
                            
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-offset-5">
                        <div class="pagination-wrapper pagination-wrapper-left">
                            <ul class="pg-pagination">
                                <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                    <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" aria-label="Previous">
                                        <i class="fi ti-angle-left"></i>
                                    </a>
                                </li>
                                <li><a href="?pageno=1">First</a></li>
                                <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
                                <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                    <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>" aria-label="Next">
                                        <i class="fi ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
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
                                                    echo '<script>location.replace("event.php")</script>';
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