<?php
session_start();

$dsn="localhost";
$username = "root";
$password = "";
$dbName = "pdopractice";

try {
 	$conn = new PDO("mysql:host=$dsn;dbname=$dbName", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $usn = $_POST["newemail"];
    $pwd = $_POST["newpwd"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    if($usn !== "" && $pwd !== "" && $fname !== "" && $lname !== "") {
        $query = "INSERT INTO `accounts`(email, fname, lname, password) VALUES(:usn, :fname, :lname, :pwd)";
        $statement = $conn->prepare($query);
        $statement->bindValue(":usn", $usn);
        $statement->bindValue(":pwd", $pwd);
        $statement->bindValue(":fname", $fname);
        $statement->bindValue(":lname", $lname);
        $statement->execute();

        $statement->closeCursor();


        $_SESSION['allFilled'] = 0;
        $_SESSION['username'] = $usn;
        $_SESSION['password'] = $pwd;
        Header("Location: test.php");
    }
    else {
        $_SESSION['allFilled'] = 1;
        session_write_close();
        Header("Location: Homepage.php");
        exit;
    }
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>