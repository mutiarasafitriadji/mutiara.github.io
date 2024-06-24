<?php
session_start();
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed_password = md5($password);

    // Memeriksa login admin
    $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = :username AND password = :password");
    $stmt->execute(['username' => $username, 'password' => $hashed_password]);
    $admin = $stmt->fetch();

    if ($admin) {
        $_SESSION['admin'] = $admin['username'];
        header("Location: admin_dashboard.php");
        exit();
    }

    // Memeriksa login user
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $stmt->execute(['username' => $username, 'password' => $hashed_password]);
    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['user'] = $user['username'];
        header("Location: user_dashboard.php");
        exit();
    } else {
        $error = "Invalid login credentials!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
        <form method="post" action="login.php">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
