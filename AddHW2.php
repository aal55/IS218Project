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
    $duedate = $_POST["date"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $isDone = 0;

    $query = 'INSERT INTO todos (owneremail, duedate, title, message, isDone) VALUES (:usn, :duedate, :title, :description, :isDone)';

    $statement = $conn->prepare($query);
    $statement->bindValue(":usn", $usn);
    $statement->bindValue(":duedate", $duedate);
    $statement->bindValue(":title", $title);
    $statement->bindValue(":description", $description);
    $statement->bindValue(":isDone", $isDone);
    $statement->execute();
    $statement->closeCursor();
    Header("Location: dashboard.php");
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>