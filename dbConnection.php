<?php
$host = "localhost"; 
$uname = "root"; 
$password = "eisaimalakas4"; 
$dbname = "eliastest"; 

$conn = mysqli_connect($host, $uname, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

