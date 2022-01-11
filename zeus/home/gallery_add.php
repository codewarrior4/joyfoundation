<?php
session_start();
if (isset($_SESSION['sessionid'])) { } else {
    echo '<script>location.replace("../")</script>';
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Joy Givers Charity Foundation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/datepicker/tempusdominus-bootstrap-4.css" />
    <link rel="stylesheet" href="../assets/vendor/inputmask/css/inputmask.css" />
    <link rel="stylesheet" href="../assets/summernote/summernote.css">
    <style>
        .container {
      max-width: 450px;
    }
    .imgGallery img {
      padding: 8px;
      max-width: 100px;
    }  
    </style>
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
                                                <li class="breadcrumb-item active" aria-current="page">Add Admin Staff</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php include 'file-upload.php'?>
                        <!-- ============================================================== -->
                        <!-- basic form  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Add Gallery</h5>
                                    <div class="card-body">
                                        <form method="POST" action="" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Title</label>
                                                <input id="inputText3" name="title" type="text" required class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Date</label>
                                                <input id="inputText3" name="date" type="date" required class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword">Banner</label>
                                                <input id="inputPassword" name="image" type="file" placeholder="Password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword">Youtube url</label>
                                                <input id="inputPassword" name="youtube" type="url" placeholder="https://youtu.be/watch?" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="chooseFile">Add Images and Pictures</label>
                                                <input id="chooseFile" name="fileUpload[]" type="file"multiple class="form-control">

                                            </div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="imgGallery">
                                                        <!-- image preview -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <?php if(!empty($response)) {?>
                                                    <div class="alert <?php echo $response["status"]; ?>">
                                                    <?php echo $response["message"]; ?>
                                                    </div>
                                                <?php }?>
                                            </div>
                                            <button class="btn btn-primary" name="register" type="submit">Add To Gallery</button>
                                        </form>
                                    </div>
                                    <?php
                                    // include '../connect.php';

                                    // if (isset($_POST['register'])) {
                                    //     echo $title = addslashes($_POST['title']);
                                    //     echo $date = addslashes($_POST['date']);
                                    //     echo $details = addslashes($_POST['details']);
                                    //     $rand = rand(100000000, 999999999);
                                        
                                    //     $file1 = $rand . $_FILES["image"]["name"];
                                    //     $filetmp1 = $_FILES['image']["tmp_name"];

                                    //         $destination = "images/" . $file1;
                                    //         move_uploaded_file($filetmp1, $destination);

                                    //         $insert = "INSERT INTO gallery values('','$title','$file1','$details','$date')";
                                    //         $query = mysqli_query($connect, $insert);
                                    //         if($query){
                                    //             //  header('Location:index.php');
                                    //             echo '<script>alert("Events Added");</script>';
                                    //             echo '<script>window.location.replace("index.php")</script>';
                                    //          } else{
                                    //              echo @mysqli_error($query);
                                    //          }
                                           
                                    // }
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script>
    $(function () {
        // Multiple images preview with JavaScript
        var multiImgPreview = function (input, imgPreviewPlaceholder) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
            var reader = new FileReader();

            reader.onload = function (event) {
                $($.parseHTML('<img height="150" width="150" class="img img-thumbnail">')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
            }

            reader.readAsDataURL(input.files[i]);
            }
        }

        };

        $('#chooseFile').on('change', function () {
        multiImgPreview(this, 'div.imgGallery');
        });
    });
    </script>
</body>

</html>