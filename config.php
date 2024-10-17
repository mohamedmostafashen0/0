<?php
$host = 'localhost';
$dbname = 'shenawy';
$username = 'root';
$password = ''; // تأكد من إدخال كلمة مرورك إذا كانت موجودة

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
