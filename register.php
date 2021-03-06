<?php
require_once 'includes/config.php';
if (isset($_POST['reg_user'])) {
    // Getting username/ email and password
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['Phone_number'];
    $query = mysqli_query($con, "insert into user(name,email,password,Phone_number) values('$uname','$email','$password','$phone')");

    if ($query) {
        echo "<script>alert('Your Account has been created successfully')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mobile Review | Registration</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style type="text/css">
        body {
            color: #999;
            background: #fafafa;
            font-family: 'Roboto', sans-serif;
        }
        .form-control {
            min-height: 41px;
            box-shadow: none;
            border-color: #e6e6e6;
        }
        .form-control:focus {
            border-color: #00c1c0;
        }
        .form-control, .btn {
            border-radius: 3px;
        }
        .signup-form {
            width: 425px;
            margin: 0 auto;
            padding: 30px 0;
        }
        .signup-form h2 {
            color: #333;
            font-weight: bold;
            margin: 0 0 25px;
        }
        .signup-form form {
            margin-bottom: 15px;
            background: #fff;
            border: 1px solid #f4f4f4;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 40px 50px;
        }
        .signup-form .form-group {
            margin-bottom: 20px;
        }
        .signup-form label {
            font-weight: normal;
            font-size: 13px;
        }
        .signup-form input[type="checkbox"] {
            margin-top: 2px;
        }
        .signup-form .btn {
            font-size: 16px;
            font-weight: bold;
            background: #003249;
            border: none;
            min-width: 140px;
            outline: none !important;
        }
        .signup-form .btn:hover, .signup-form .btn:focus {
            background: #007EA7;
        }
        .signup-form a {
            color: #007EA7;
            text-decoration: none;
        }
        .signup-form a:hover {
            text-decoration: underline;
            font-weight: bold;
        }
    </style>
</head>


<body class="bg-transparent">

    <?php include('includes/header.php'); ?>

    <div class="container">
        <div class="row" style="margin-top: 4%">
            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <div class="account-content">
                    <br>
                    <div class="signup-form">
                        <form method="post">
                            <h2>Sign Up</h2>
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Phone_number" placeholder="Phone Number" required="required">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg" name="reg_user">Sign Up</button>
                            </div>
                        </form>
                        <div class="text-center">Already have an account? <a href="login.php">Login here</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>