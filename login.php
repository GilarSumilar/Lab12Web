<?php
session_start();
$title = 'Login Form Sederhana';
include_once 'koneksi.php';
if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = '{$user}'

AND password = md5('{$password}') ";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_affected_rows($conn) != 0) {
        $_SESSION['isLogin'] = true;
        $_SESSION['user'] = mysqli_fetch_array($result);
        header('location: index.php');
    } else
        $errorMsg = "<p style=\"color:red;\">Gagal Login,
silakan ulangi lagi.</p>";
}

include_once "header.php";
if (isset($errorMsg))
    echo $errorMsg;
?>

<h2>Login</h2>
<form method="post">
    <div style="margin-bottom: 10px;">
        <label for="user">Username</label>
        <input type="text" name="user" id="user" required>
    </div>
    <div style="margin-bottom: 10px;">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
    </div>
    <div>
        <input type="submit" name="submit" value="Login">
    </div>
</form>