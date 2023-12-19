<?php
session_start();

// Check if the user is logged in, if not, redirect to the login page
if (!isset($_SESSION['isLogin']) || $_SESSION['isLogin'] !== true) {
    header('Location: login.php');
    exit();
}

$title = 'Login Form Sederhana';
include_once 'koneksi.php';
include_once 'header.php';

// You can customize the content of your dashboard here
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login From Sederhana</title>
</head>

<body>
    <h2>Welcome, <?php echo $_SESSION['user']['username']; ?>!</h2>
    <p>This is the dashboard content.</p>
    <div class="button">
        <button type="button">
            <a href="out.php" style="text-decoration: none;">Logout</a>
        </button>
    </div>
</body>

</html>