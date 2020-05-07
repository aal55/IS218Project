<?php
session_start();
?>

<!doctype html>
<html lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/editHw.css">
  <script src="js/hwValidation.js"></script>

</head>

<body>
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->
<div class="container_fluid">
  <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
    <div class="container">
      <h1 class="text-light font-weight-bold">HWTrack</h1>
      <form class="form-inline">
        <label class="mr-sm-2 text-light">Username </label>
        <input type="email" class="form-control  mr-sm-2" id="email">
        <label for="pwd" class="mr-sm-2 text-light">Password </label>
        <input type="password" class="form-control mr-sm-2" id="pwd">
        <button type="submit" class="btn btn-secondary">Log In</button> <!-- Make interactive -->
      </form>
    </div>
  </nav>
  <div class="container-fluid">
    <div id="article_body">
      <h2>Edit Homework Assignment</h2>
      <form action="/action_page.php" class="form-group">
        Due Date:
        <input type="text" id="date" name="date" required><br><br>
      </form>
      <form action="/action_page.php" class="form-group">
        Title:
        <input type="text" id="title" name="title" required><br><br>
      </form>
      <form action="/action_page.php" class="form-group">
        Description &#40Max 144 Characters&#41:
        <input type="text" id="description" name="description" required><br><br>
      </form>
      <form action="/action_page.php" class="form-group">
        <button type="submit" class="button">
          <a class="nav-link" href="editHw.html">Save Changes</a></button>
        <button type="reset" class="button">
          <a class="nav-link" href="editHw.html">Discard Changes</a></button>
      </form>
    </div>
  </div>
  <div class="container-fluid"></div>
  <div id="sidebar">

  </div>
</div>
</div>
<script src="js/vendor/modernizr-3.7.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
</script>
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
