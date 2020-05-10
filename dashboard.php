<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">HW Track</a>
        </div>


            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h2>Dashboard</h2>


            </ul><br>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search..">
                <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
            </div>
        </div>

        <div class="col-sm-9">
            <h4><small>First Name, Last Name Profile</small></h4>
            <hr>
            <h2><u>To-do </u></h2>
            <br>

            <p><b>Homework #1 </b><input type="checkbox" name="pep" unchecked> complete<br></p>

            <button type="submit" class="btn btn-success">New</button>
            <button type="submit" class="btn btn-success">Edit</button>
            <button type="submit" class="btn btn-success">Delete</button>


            <br><br>


            <hr>
            <h2><u>Completed</u></h2>
            <br>

            <p><b>Homework #2 </b> <input type="checkbox" name="pep" checked> complete<br></p>

            <button type="submit" class="btn btn-success">Edit</button>
            <button type="submit" class="btn btn-success">Delete</button>

            <hr>


            <br><br>

            <div class="row">
                <div class="col-sm-2 text-center">
                </div>
                <div class="col-sm-10">

                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>


<?php

$user = [ 'firstname' = "user firstname queried from database",
          'lastname' = "user lastname queried from database"]
$_SESSION['user'] = $user;
echo "$_SESION['user']['firstname'], [lastname]";

$startdate=strtotime("Monday");
$enddate=strtotime("+1 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("d M Y", $startdate);
  $startdate = strtotime("+1 week", $startdate);
?>



</body>
</html>
