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
    <title> Joy Givers Charity Foundation</title>
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />
    <link rel="stylesheet" href="../assets/vendor/inputmask/css/inputmask.css" />
    <link rel="stylesheet" href="../assets/summernote/summernote.css">
</head>

<body>
    <div class="dashboard-main-wrapper">
        <div class="dashboard-header">
            <?php



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
                                    <h2 class="pageheader-title">Joy Givers Dashboard</h2>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Edit Gallery</li>
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

                        $query = mysqli_query($connect, "select * from gallery where id='$id' ");
                        while ($row = mysqli_fetch_assoc($query)) {
                            $title = $row['title'];
                            $details = $row['description'];
                            $date = $row['date'];
                        }
                        ?>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Edit Gallery</h5>
                                    <div class="card-body">
                                        <form method="POST" action="" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Title</label>
                                                <input id="inputText3" name="title" value="<?php echo $title ?>" type="text" required class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Date </label>
                                                <input id="inputText3" name="date" value="<?php echo $date ?>" type="date" required class="form-control">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Details</label>
                                                <textarea class="form-control" id="summernote"  name="description" placeholder="Write Here" rows="15"><?php echo $details ?></textarea>
                                            </div>
                                            <button class="btn btn-primary" name="update" type="submit">Edit Gallery</button>
                                        </form>
                                    </div>
                                    <?php
                               include '../connect.php';

                                    if (isset($_POST['update'])) {
                                        $title = addslashes($_POST['title']);
                                        echo $description = addslashes($_POST['description']);
                                        $date = addslashes($_POST['date']);
                                    
                                            $insert = "UPDATE gallery set title=' " . $title . "', date='" . $date . "',description='$description'  where id='$id' ";
                                            $query = mysqli_query($connect, $insert);

                                            echo '<script>location.replace("gallery_details.php")</script>';
                                        
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
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/summernote/summernote.min.js"></script>

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