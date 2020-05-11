<?php
session_start();

$dsn="sql2.njit.edu";
$username = "aal55";
$password = "Something12345!";
$dbName = "aal55";

try {
 	$conn = new PDO("mysql:host=$dsn;dbname=$dbName", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $id = $_POST["button"];
    $query = "DELETE FROM `todos` WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->bindValue(":id", $id);
    $statement->execute();
    $statement->closeCursor();
    Header("Location: dashboard.php");
}

catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>