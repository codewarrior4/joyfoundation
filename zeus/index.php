<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login To EneroBrandz  </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="#"><h1 style="color:#201E1E">Joy Givers Charity Foundation</h1></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form method="POST" action="index.php" >
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="username" required type="text" placeholder="Username" autocomplete="on">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" required type="password" autocomplete="on" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary btn-lg btn-block">Sign in</button>

                    
                </form>
            </div><?php
                    include 'connect.php';

                if (isset($_POST['login'])) 
                {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $uname= "joy";
                    $password="password";
                    $sessionid="joycharity";

                    if (!empty($username) && !empty($password)) 
                    {
                            if($username==$uname && $password==$password)
                            {
                                session_start();
                                $_SESSION['sessionid'] = $sessionid;
                                
                                echo '<script>location.replace("home/")</script>';
                            }
                            else
                            {
                              echo '<script>alert("Invalid Username or password ");</script>';
                            }
                    }

                    else
                    {
                        echo '<script>alert("Fields cannot appear blank");</script>';
                    }
                }
                    ?>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>