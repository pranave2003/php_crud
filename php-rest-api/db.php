<?php
// db.php
$host = "localhost";
$user = "root";
$pass = "";
$database = "crud";

$connection = mysqli_connect($host, $user, $pass, $database);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}
else die("connection successfully $database");
?>
