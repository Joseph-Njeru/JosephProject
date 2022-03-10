<?php
include "wartheader.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashstyles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="bootstrap/js/bootstrap.min.js"> </script>
    <script src="Js/jquery.min.js"></script>
    <script src="Js/popper.min.js"></script>
</head>
<body class="bg-primary">
<div class="container">
    <div class="card m-3">
        <div class="card-body">
            <div class="row m-3">
                <div class="col lg-5 bg-register-image">
                    image here
                </div>
                <div class="col-lg-7">
                    <div class="text-center">
                        <h1 class="h4 grey mb-4">Login</h1>
                    </div>
                    <hr>
                    <form action="handle-login.php" method="post">

                        <div class="row m-3">
                            <input class="form-control rounded-pill" type="email" name="emailaddress" Placeholder="Email Address" required>
                        </div>
                        <div class="row m-3">
                            <div class="col-sm-12">
                                <input class="form-control rounded-pill" type="password" name="password" placeholder="password" required>
                            </div>
                        </div>
                        <div class="row m-3">
                            <input href="ThePane.php" type="submit" class="rounded-pill btn btn-primary" name="login" value="login">
                        </div>
                        <hr>
                        <div class="row m-3">

                            <a href="" class="rounded-pill btn btn-danger">
                                <i class="fa fa-google" ></i>
                                Login with Google </a>
                        </div>
                        <div class="row m-3">
                            <a href="reset.php" class="rounded-pill small text-center"> Forgot password </a>
                        </div>
                        <div class="row m-3">
                            <a href="register.php" class="rounded-pill text-primary small text-center"> Create an Account</a>
                        </div>



                    </form>

                </div>
            </div>



        </>
    </div>



</div>




</body>
</html>
