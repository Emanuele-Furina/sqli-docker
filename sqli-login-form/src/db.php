<?php
$host = 'db'; 
$dbname = 'sqli_db';
$username = 'root';
$password = 'password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function executeQuery($query) {
    global $pdo;
    return $pdo->query($query);
}
?>