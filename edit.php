<?php
session_start();

$dsn="localhost";
$username = "root";
$password = "";
$dbName = "pdopractice";

try {
	$conn = new PDO("mysql:host=$dsn;dbname=$dbName", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$id = $_SESSION['id'];
	$duedate = $_POST['date'];
	$title = $_POST['title'];
	$description = $_POST['description'];

	$query = 'UPDATE `todos` SET duedate = :duedate, title = :title, message = :description WHERE id = :id';
	
	$statement = $conn->prepare($query);
	$statement->bindValue(":id", $id);
	$statement->bindValue(":duedate", $duedate);
	$statement->bindValue(":title", $title);
	$statement->bindValue(":description", $description);
 	$statement->execute();
 	$statement->closeCursor();
 	Header("Location: dashboard.php");
}

catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>