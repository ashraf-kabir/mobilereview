<?php
session_start();
//Database Configuration File
include('includes/config.php');
//error_reporting(0);


if (isset($_POST['login'])) {

    // Getting username/ email and password
    $uname = $_POST['username'];
    $password = $_POST['password'];
	

    // Fetch data from database on the basis of username/email and password
    $sql = mysqli_query($con, "SELECT name,email,password FROM user WHERE (name='$uname' || email='$uname')");
    $num = mysqli_fetch_array($sql);
    if ($num > 0) {
        $hashpassword = $num['password'];           // hashed password fetching from database
        //verifying Password
		
        if ($password==$hashpassword) {
			
            $user=$_SESSION['userlogin'] = $_POST['username'];
			$sql = mysqli_query($con, "SELECT email FROM user WHERE name='$user'");
			$num = mysqli_fetch_array($sql);
			$useremail=$_SESSION['useremail']=$num[0];
		
			
            header('location:index.php');
			
			
        } else {
            echo "<script>alert('Wrong Password');</script>";
        }
    }                    // if username or email not found in database
    else {
        echo "<script>alert('Not registered');</script>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="mobile Portal">
    <meta name="author" content="">

    <!-- App title -->
    <title>Mobile Review</title>

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/core.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>

    <script src="assets/js/modernizr.min.js"></script>

</head>

<body class="bg-transparent">
    <!-- HOME -->
    <section>
        <div class="container-alt">
            <div class="row">
                <div class="col-sm-12">

                    <div class="wrapper-page">

                        <div class="m-t-40 account-pages">
                            <div class="text-center account-logo-box">
                                <h2 class="text-uppercase">
                                    <a href="index.php" class="text-success">
                                        <span><img src="assets/images/logo.png" alt="" height="50"></span>
                                    </a>
                                </h2>
                                <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                            </div>
                            <div class="account-content">
                                <form class="form-horizontal" method="post">

                                    <div class="form-group ">
                                        <div class="col-xs-12">
                                            <input class="form-control" type="text" required="" name="username"
                                                   placeholder="Username or email" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input class="form-control" type="password" name="password" required=""
                                                   placeholder="Password" autocomplete="off">
                                        </div>
                                    </div>


                                    <div class="form-group account-btn text-center m-t-10">
                                        <div class="col-xs-12">
                                            <button class="btn w-md btn-bordered btn-danger waves-effect waves-light"
                                                    type="submit" name="login">Log In
                                            </button>
                                        </div>
										<div class="col-xs-12">
                                            if you are not registered then please<a class="nav-link" href="register.php">sign up</a>
                                        </div>
                                    </div>

                                </form>

                                <div class="clearfix"></div>

                            </div>
                        </div>
                        <!-- end card-box-->


                    </div>
                    <!-- end wrapper -->

                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->

    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

</body>
</html>