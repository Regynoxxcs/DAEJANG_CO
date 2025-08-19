<?php
// assets/db.php
$host = "localhost";
$user = "root";       // change if needed
$pass = "";           // change if needed
$dbname = "daejang_co";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
