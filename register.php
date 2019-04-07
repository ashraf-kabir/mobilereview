<?php
require_once 'includes/config.php';
if (isset($_POST['reg_user'])) {

    // Getting username/ email and password
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['Phone_number'];
    $query = mysqli_query($con, "insert into user(name,email,password,Phone_number) values('$uname','$email','$password','$phone')");
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
</head>


<body class="bg-transparent">

    <?php include('includes/header.php'); ?>

    <div class="container">

        <div class="row" style="margin-top: 4%">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <div class="account-content">

                    <div class="header">
                        <h2>Register</h2>
                    </div>

                    <br>

                    <form method="post">
                        <div class="input-group">
                            <label>Username</label>
                            <input type="text" name="username" value="">
                        </div>
                        <div class="input-group">
                            <label>Email</label>
                            <input type="email" name="email" value="">
                        </div>
                        <div class="input-group">
                            <label>Password</label>
                            <input type="password" name="password">
                        </div>
                        <div class="input-group">
                            <label>phone number</label>
                            <input type="text" name="Phone_number">
                        </div>
                        <div class="input-group">
                            <button type="submit" class="btn" name="reg_user">Register</button>
                        </div>
                    </form>

                    <p>
                        Already a member? <a href="login.php">Sign in</a>
                    </p>
                    <div class="clearfix"></div>

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