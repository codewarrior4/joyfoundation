<?php
session_start();
if (isset($_SESSION['sessionid'])) {
} else {
    echo '<script>location.replace("../")</script>';
}
?>
<!doctype html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog Post | Joy Givers Charity Foundation</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script> -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/summernote/summernote.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />
    <link rel="stylesheet" href="../assets/vendor/inputmask/css/inputmask.css" />
</head>

<body>
    <div class="dashboard-main-wrapper">
        <div class="dashboard-header">
            <?php include 'header.php'; ?>
        </div>
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <?php include 'nav.php'; ?>
            </div>
        </div>

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header">
                                    <h2 class="pageheader-title">Joy Givers Charity Foundation Dashboard</h2>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Add Blog Content</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Add Event </h5>
                                    <div class="card-body">
                                        <form method="POST" action="event_add.php" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Title</label>
                                                <input id="inputText3" name="title" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword">Banner</label>
                                                <input id="inputPassword" name="image" type="file" placeholder="Password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword">Event Date</label>
                                                <input id="inputPassword" name="date" type="date" placeholder="" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Post Details</label>
                                                <textarea class="form-control" id="summernote" name="details" placeholder="Write Here" rows="15" cols="15">
                                                    
                                                </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Location</label>
                                                <input id="inputText3" name="location" type="text" class="form-control">
                                            </div>
                                            <button class="btn btn-primary" name="register" type="submit">Publish Event</button>
                                        </form>
                                    </div>
                                    <?php
                                    include '../connect.php';

                                    if (isset($_POST['register'])) {
                                        $title = addslashes($_POST['title']);
                                     
                                        // $tag = addslashes($_POST['tag']);
                                        $location = addslashes($_POST['location']);
                                        $date = addslashes($_POST['date']);
                                        $status = "1";
                                        $details = addslashes($_POST['details']);
                                        $time = date("H:i:s");
                                        $rand = rand(100000000, 999999999);

                                         $file1 = $rand . $_FILES["image"]["name"];
                                         $filetmp1 = $_FILES['image']["tmp_name"];


                                         if ((!empty($title)) &&  (!empty($file1)) && (!empty($location))) {
                                            $destination1 = "images/" . $file1;
                                             move_uploaded_file($filetmp1, $destination1);

                                            $insert = "INSERT INTO events values('','$title','$file1','$destination1','$details','$location','$date','$time','$status')";
                                             $query = mysqli_query($connect, $insert);
                                             if($query){
                                                echo '<script>alert("Events Added");</script>';
                                                echo '<script>window.location.replace("index.php")</script>';
                                             } else{
                                                 echo mysqli_error($query);
                                             }
                                            
                                         } else {
                                             echo '<script>alert ("fields cannot appear empty");<script>';
                                         }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'footer.php'; ?>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/summernote/js/summernote.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="../assets/vendor/inputmask/js/jquery.inputmask.bundle.js"></script>
    <script>
    
    

        $(function(e) {
            "use strict";
            $(".date-inputmask").inputmask("dd/mm/yyyy"),
                $(".phone-inputmask").inputmask("(999) 999-9999"),
                $(".international-inputmask").inputmask("+9(999)999-9999"),
                $(".xphone-inputmask").inputmask("(999) 999-9999 / x999999"),
                $(".purchase-inputmask").inputmask("aaaa 9999-****"),
                $(".cc-inputmask").inputmask("9999 9999 9999 9999"),
                $(".ssn-inputmask").inputmask("999-99-9999"),
                $(".isbn-inputmask").inputmask("999-99-999-9999-9"),
                $(".currency-inputmask").inputmask("$9999"),
                $(".percentage-inputmask").inputmask("99%"),
                $(".decimal-inputmask").inputmask({
                    alias: "decimal",
                    radixPoint: "."
                }),

                $(".email-inputmask").inputmask({
                    mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[*{2,6}][*{1,2}].*{1,}[.*{2,6}][.*{1,2}]",
                    greedy: !1,
                    onBeforePaste: function(n, a) {
                        return (e = e.toLowerCase()).replace("mailto:", "")
                    },
                    definitions: {
                        "*": {
                            validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~/-]",
                            cardinality: 1,
                            casing: "lower"
                        }
                    }
                })
        });
    </script>
    
    
    <script>
        
            //  jQuery(document).ready(function(){

            //     $('.summernote').summernote({
            //         height: 400,                 // set editor height
            //         minHeight: null,             // set minimum height of editor
            //         maxHeight: null,             // set maximum height of editor
            //         focus: false                 // set focus to editable area after initializing summernote
            //     });


            // });
            
            $(document).ready(function() {
                 $('#summernote').summernote(
                     
                     {
                         height: 400,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false 
                     }
                     );
                      
                });
    </script>
</body>

</html>