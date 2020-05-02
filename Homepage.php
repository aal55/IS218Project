<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/homepage.css">
    <script src="js/formValidation.js"></script>
    <title>Homepage</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
    <div class="container">
        <h1 class="text-light font-weight-bold">HWTrack</h1>
        <form action="login.php" method="post" class="form-inline" id="login-form">
            <label class="mr-sm-2 text-light">Username </label>
            <input type="email" class="form-control mr-sm-2" id="email" name="username" required>
            <label for="pwd" class="mr-sm-2 text-light">Password </label>
            <input type="password" class="form-control mr-sm-2" id="pwd" name="password" required>
            <button type="submit" class="btn btn-secondary" onclick="loginValidation()">Log In</button>
        </form>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="img-padding col-ms-6">
            <div class="laptop-pic"><img src="img/laptop.jpg" width="100%" height="100%" class="rounded"
                                         alt="Do Your Homework"></div>
            <div class="centered text-light font-weight-bold">
                Make Homework Easier to Manage
                <p class="subheading text-light font-weight-normal">Organizing your assignments since 2020</p>
            </div>
        </div>
        <div class="sign-up col form-group">
            <h2 class="text-primary font-weight-bold">Sign Up Today</h2>
            <form action="signup.php" method="post" class="sign-up-form" id="signup-form">
                <div class="form-group">
                    <label class="mr-sm-2 text-secondary">Username </label>
                    <input type="email" class="form-control  mr-sm-2" id="newemail" name="newemail">
                </div>
                <div class="form-group">
                    <label for="pwd" class="mr-sm-2 text-secondary">Password </label>
                    <input type="password" class="form-control mr-sm-2" id="newpwd" name="newpwd">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="mr-sm-2 text-secondary">First Name </label>
                            <input type="text" class="form-control mr-sm-2" id="fname" name="fname">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="mr-sm-2 text-secondary">Last Name </label>
                            <input type="text" class="form-control mr-sm-2" id="lname" name="lname">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="mr-sm-2 text-secondary">College </label>
                    <input type="text" class="form-control mr-sm-2" id="college" name="college">
                </div>
                <div class="form-group">
                    <label class="mr-sm-2 text-secondary">Major </label>
                    <input type="text" class="form-control mr-sm-2" id="major" name="major">
                </div>
                <div class="sign-up-button">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if(isset($_SESSION['notFound']) && $_SESSION['notFound'] == 1){ ?>
    <script type="text/javascript">
        alert('Username or Password is incorrect');
    </script>
<?php $_SESSION['notFound'] = 0;} ?>
<?php
if(isset($_SESSION['allFilled']) && $_SESSION['allFilled'] == 1){ ?>
    <script type="text/javascript">
        alert('Please fill out all fields');
    </script>
<?php $_SESSION['allFilled'] = 0;} ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>