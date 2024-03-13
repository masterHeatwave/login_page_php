<?php
session_start();
include "dbConnection.php";

if (!isset($_POST['username'], $_POST['password'])) {
    header("Location: index.php");
    exit();
}

$uname = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $uname);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Check if a user with the provided username exists
if (mysqli_num_rows($result) !== 1) {
    header("Location: index.php?error=Incorrect%20username%20or%20password");
    exit();
}

$row = mysqli_fetch_assoc($result);

if ($password === $row['password']) {
    // If password is correct, set session variables and redirect to home page
    $_SESSION['username'] = $row['username'];
    $_SESSION['id'] = $row['id'];
    header("Location: home.php");
    exit();
} else {
    // If the password is incorrect, redirect back to login page with error message
    header("Location: index.php?error=Incorrect%20username%20or%20password");
    exit();
}
?>
