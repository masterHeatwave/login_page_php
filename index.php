<?php
session_start();
include "dbConnection.php";

// Check user login status
if (!isset($_SESSION['username'])) {
    header('Location: index.html'); 
    exit();
}

// Logout functionality
if (isset($_POST['but_logout'])) { 
    session_destroy(); 
    header('Location: index.html'); 
    exit();
}
?>

