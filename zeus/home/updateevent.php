<?php
session_start();
if (isset($_SESSION['sessionid'])) { } else {
    echo '<script>location.replace("../")</script>';
}
?>
<!doctype html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>New Admin Joy Givers Charity Foundation</title>
    <!-- Bootstrap CSS -->
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/summernote/summernote.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />
    <link rel="stylesheet" href="../assets/vendor/inputmask/css/inputmask.css" />
</head>

<body>
    <div class="dashboard-main-wrapper">
        <div class="dashboard-header">
            <?php

            use Illuminate\Support\Facades\Date;

            include 'header.php'; ?>
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
                                                <li class="breadcrumb-item active" aria-current="page">Edit Event </li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                        <?php
                        include '../connect.php';
                        $id = $_GET['id'];

                        $query = mysqli_query($connect, "select * from events where id='$id' ");
                        while ($row = mysqli_fetch_assoc($query)) {
                            $title = $row['title'];
                            $location = $row['location'];
                            $details = $row['details'];
                        }
                        ?>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Blog Update</h5>
                                    <div class="card-body">
                                        <form method="POST" action="" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Title</label>
                                                <input id="inputText3" value="<?php echo $title ?>" name="title" type="text" class="form-control">
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Details</label>
                                                <textarea class="form-control" id="summernote"  name="details" placeholder="Write Here" rows="15"><?php echo $details ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Location</label>
                                                <input id="inputText3"value="<?php echo $location ?>"  name="location" type="text" class="form-control">
                                            </div>
                                            <button class="btn btn-primary" name="update" type="submit">Edit Event</button>
                                        </form>
                                    </div>
                                    <?php
                                include '../connect.php';

                                    if (isset($_POST['update'])) {
                                        $title = addslashes($_POST['title']);
                                        $location = addslashes($_POST['location']);
                                        $description = addslashes($_POST['details']);
                                            $insert = "UPDATE events set details='$description',location='$location',title= '$title' where id='$id' ";
                                            $query = mysqli_query($connect, $insert);
                                            if($query){
                                                //  header('Location:index.php');
                                                echo '<script>alert("Events Updated");</script>';
                                                echo '<script>window.location.replace("event_details.php")</script>';
                                             } else{
                                                 echo mysqli_error($query);
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
    <script src=./assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- <script src=./assets/summernote/summernote.js"></script> -->
    <script src=./assets/summernote/js/summernote.min.js"></script>

    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="../assets/vendor/inputmask/js/jquery.inputmask.bundle.js"></script>
    
        <script>
        
            
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
</body>

</html>