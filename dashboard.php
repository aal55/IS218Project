<?php
session_start();

$dsn="sql2.njit.edu";
$username = "aal55";
$password = "Something12345!";
$dbName = "aal55";

try {
 	$conn = new PDO("mysql:host=$dsn;dbname=$dbName", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $usn = $_SESSION["username"];
    $query = "SELECT * FROM `accounts` WHERE email = :usn";
    $statement = $conn->prepare($query);
    $statement->bindValue(":usn", $usn);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    $_SESSION["firstName"] = "";
    $_SESSION["lastName"] = "";
    foreach($result as $record) {
        $_SESSION["firstName"] = $record["fname"];
        $_SESSION["lastName"] = $record["lname"];
    }
}

catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
    <div class="container">
        <h1 class="text-light font-weight-bold">HWTrack</h1>
        <form action="signout.php" method="post" class="form-inline">
            <button type="submit" class="btn btn-secondary">Sign Out</button>
        </form>
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
            <h4><small>Welcome <?php echo $_SESSION["firstName"] . " " . $_SESSION["lastName"]; ?></small></h4>
            <hr>
            <h2><u>To-do </u></h2>
            <br>
            <?php
                $query = "SELECT id, title, message, duedate FROM `todos` WHERE owneremail=:usn AND isdone=0 ORDER BY duedate";
                $statement = $conn->prepare($query);
                $statement->bindValue(":usn", $usn);
                $statement->execute();
                $result = $statement->fetchAll();
                $statement->closeCursor();
                echo "<table>";
                echo "<tr>";
                echo "<td><h4>Title</h4></td>";
                echo "<td>|</td>";
                echo "<td><h4>Description</h4></td>";
                echo "<td>|</td>";
                echo "<td><h4>Due Date</h4></td>";
                echo "<td>|</td>";
                echo "<td><form action='AddHw.php' method='post'>";
                echo "<button type='submit' value='" . $record[0] . "' class='btn btn-success' name='button'>New</button>";
                echo "</form></td>";
                echo "</tr>";
                foreach($result as $record) {
                    echo "<tr>";
                    echo "<td>" . $record[1] . "</td>";
                    echo "<td>|</td>";
                    echo "<td>" . $record[2] . "</td>";
                    echo "<td>|</td>";
                    echo "<td>" . $record[3] . "</td>";
                    echo "<td>|</td>";
                    echo "<td><form action='AddHw.php' method='post'>";
                    echo "<button type='submit' value='" . $record[0] . "' class='btn btn-success' name='button'>New</button>";
                    echo "</form></td>";
                    echo "<td><form action='editHw.php' method='post'>";
                    echo "<button type='submit' value='" . $record[0] . "' class='btn btn-success' name='button'>Edit</button>";
                    echo "</form></td>";
                    echo "<td><form action='delete.php' method='post'>";
                    echo "<button type='submit' value='" . $record[0] . "' class='btn btn-success' name='button'>Delete</button>";
                    echo "</form></td>";
                    echo "<td><form action='done.php' method='post'>";
                    echo "<button type='submit' value='" . $record[0] . "' class='btn btn-success' name='button'>Completed</button>";
                    echo "</form></td>";
                    echo "</tr>";
                }
                echo "</table>";
            ?>

            <br><br>


            <hr>
            <h2><u>Completed</u></h2>
            <br>

            <?php
                $query = "SELECT id, title, message, duedate FROM `todos` WHERE owneremail=:usn AND isdone=1 ORDER BY duedate";
                $statement = $conn->prepare($query);
                $statement->bindValue(":usn", $usn);
                $statement->execute();
                $result = $statement->fetchAll();
                $statement->closeCursor();
                echo "<table>";
                echo "<tr>";
                echo "<td><h4>Title</h4></td>";
                echo "<td>|</td>";
                echo "<td><h4>Description</h4></td>";
                echo "<td>|</td>";
                echo "<td><h4>Due Date</h4></td>";
                echo "<td>|</td>";
                foreach($result as $record) {
                    echo "<tr>";
                    echo "<td>" . $record[1] . "</td>";
                    echo "<td>|</td>";
                    echo "<td>" . $record[2] . "</td>";
                    echo "<td>|</td>";
                    echo "<td>" . $record[3] . "</td>";
                    echo "<td>|</td>";
                    echo "<td><form action='editHw.php' method='post'>";
                    echo "<button type='submit' value='" . $record[0] . "' class='btn btn-success' name='button'>Edit</button>";
                    echo "</form></td>";
                    echo "<td><form action='delete.php' method='post'>";
                    echo "<button type='submit' value='" . $record[0] . "' class='btn btn-success' name='button'>Delete</button>";
                    echo "</form></td>";
                    echo "<td><form action='notDone.php' method='post'>";
                    echo "<button type='submit' value='" . $record[0] . "' class='btn btn-success' name='button'>Uncheck Off</button>";
                    echo "</form></td>";
                    echo "</tr>";
                }
                echo "</table>";
            ?>

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
