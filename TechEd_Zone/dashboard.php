<?php
error_reporting(E_ERROR | E_PARSE);
include('auth_session.php'); // Include the auth_session.php file to start the session and check if the user is logged in
session_start(); // Start the session
// Initialize the username variable
$username = isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username'], ENT_QUOTES, 'UTF-8') : 'Guest';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
        <h1>Welcome, <?php echo $username; ?>!</h1>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
