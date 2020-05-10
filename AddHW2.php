<?php
session_start();

$dsn = "mysql:host=localhost;dbname=";
$username = "";
$password = "";

if(isset($_POST['submit']){
 $dsn = new PDO($dsn, $username, $password);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $query = $conn->prepare("ALTER TABLE todos ADD <title> varchar");
 $query = 'INSERT INTO todos (duedate, title, message) VALUES (:date,
 :title, :description)';

 	$statement = $conn->prepare($query);
 	$statement->execute($duedate, $title, $message);
 	$statement->closeCursor();
 	print("Homework Assignment is Added");
 }

catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage()
}

?>