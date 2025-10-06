<?php
$host = '127.0.0.1';
$port = '3306'; // IMPORTANT: Add this line
$dbname = 'expense_ccbd';
$username = 'root';
$password = ''; // Leave blank unless you set one

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Error! " . $e->getMessage();
    $pdo = null;
}
?>
