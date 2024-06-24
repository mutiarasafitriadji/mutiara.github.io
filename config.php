<?php
$host = 'localhost';
$db = 'admin_db';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; // Tambahkan ini untuk memeriksa koneksi
} catch (PDOException $e) {
    die("Could not connect to the database $db :" . $e->getMessage());
}
?>
