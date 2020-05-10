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


  <link rel="stylesheet" href="css/editHw.css">
  <script src="js/hwValidation.js"></script>

</head>

<body>

<div class="container_fluid">
  <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
    <div class="container">
      <h1 class="text-light font-weight-bold">HWTrack</h1>
      <form class="form-inline">
        <button type="reset" class="button">
			<a class="nav-link" href="Homepage.php">Sign Out</a></button>
      </form>
    </div>
  </nav>
  <div class="container-fluid">
    <div id="article_body">
      <h2>Edit Homework Assignment</h2>
	  <form action="edit.php" method="post" id="edit">
		<div class="form-group">
			Due Date:
			<input type="text" id="date" name="date" value="<?php echo $duedate; ?>" required><br><br>
		</div>
		<div class="form-group">
			Title:
			<input type="text" id="title" name="title" value="<?php echo $title; ?>" required><br><br>
		</div>
		<div class="form-group">
			Description &#40Max 144 Characters&#41:
			<input type="text" id="description" name="description" value="<?php echo $message; ?>" required><br><br>
		</div>
		<div class="form-group">
			<input type="submit" class="button">
			<a class="nav-link" href="Homepage.php">Save Changes</a></input>
			<input type="button" class="button">
			<a class="nav-link" href="Homepage.php">Discard Changes</a></input>
		</div>
      </form>
    </div>
  </div>
  <div class="container-fluid"></div>
  <div id="sidebar">

  </div>
</div>
</div>

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
