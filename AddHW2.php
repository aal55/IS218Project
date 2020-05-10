<?php
session_start();

$dsn = "localhost";
$username = "root";
$password = "";
$dbName = "pdopractice";

try {
    $conn = new PDO("mysql:host=$dsn;dbname=$dbName", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = 'INSERT INTO todos (duedate, title, message) VALUES (:duedate, :title, :description)';

    $statement = $conn->prepare($query);
    $statement->bindValue(":duedate", $duedate);
    $statement->bindValue(":title", $title);
    $statement->bindValue(":description", $description);
    $statement->execute();
    $statement->closeCursor();
    Header("Location: Homepage.php");

}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>