<?php
session_start();

$dsn="localhost";
$username = "root";
$password = "";
$dbName = "pdopractice";

try {
    $conn = new PDO("mysql:host=$dsn;dbname=$dbName", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $usn = $_POST["username"];
    $pwd = $_POST["password"];

    $query = "SELECT * FROM `accounts` WHERE email = :usn AND password = :pwd";
    $statement = $conn->prepare($query);
    $statement->bindValue(":usn", $usn);
    $statement->bindValue(":pwd", $pwd);
    $statement->execute();

    $results = $statement->fetchAll();
    $statement->closeCursor();

    if(count($results) > 0) {
        $_SESSION['notFound'] = 0;
        $_SESSION['username'] = $usn;
        $_SESSION['password'] = $pwd;
        Header("Location: test.php");
    }
    else {
        $_SESSION['notFound'] = 1;
        session_write_close();
     	Header("Location: Homepage.php");
     	exit;
    }
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>