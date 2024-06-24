<?php
session_start();

if (isset($_SESSION['admin'])) {
    header("Location: admin_dashboard.php");
    exit();
} elseif (isset($_SESSION['user'])) {
    header("Location: user_dashboard.php");
    exit();
} else {
    header("Location: login.php");
    exit();
}
?>
