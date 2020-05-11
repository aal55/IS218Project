<?php
session_start();

$dsn="sql2.njit.edu";
$username = "aal55";
$password = "Something12345!";
$dbName = "aal55";

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
        Header("Location: dashboard.php");
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