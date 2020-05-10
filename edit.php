<?php
session_start();

$dsn="localhost";
$username = "root";
$password = "";
$dbName = "pdopractice";

try {
	$conn = new PDO("mysql:host=$dsn;dbname=$dbName", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
    $users = ["id" => $_POST['id'],"duedate" => $_POST['duedate'], "title" => $_POST['title'], "message" => $_POST['message']];
	$query = 'UPDATE users SET duedate = :duedate, title = :title, message = :message, WHERE id = :id';
	
	$statement = $conn->prepare($query);
 	$statement->execute($users);
 	$statement->closeCursor();
 	print("Homework Assignment is Updated!");
}

catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>