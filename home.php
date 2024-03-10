<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="welcome-message">
            <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
            <p>Thank you for logging in. Here are some features you can explore:</p>
            <ul>
                <li>View your profile</li>
                <li>Update account settings</li>
                <li>Access personalized content</li>
                <li>Interact with other users</li>
            </ul>
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
    </div>
</body>
</html>

<?php 
} else {
    header("Location: index.php");
    exit();
}
?>
