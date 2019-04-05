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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mobile Review | Home Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">


</head>

<body class="bg-transparent">
<?php include('includes/header.php'); ?>

    <div class="container">

        <div class="row" style="margin-top: 4%">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

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
                                If you are not registered then please <a class="nav-link" href="register.php">sign up</a>
                            </div>
                        </div>

                    </form>

                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Sidebar Widgets Column -->
            <?php include('includes/sidebar.php'); ?>

        </div>

    </div>

        
    <?php include('includes/footer.php'); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>