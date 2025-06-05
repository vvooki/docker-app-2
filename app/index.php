<?php
$dsn = 'mysql:host=db;dbname=testdb;charset=utf8';
$user = 'testuser';
$pass = 'testpass';

try {
    $pdo = new PDO($dsn, $user, $pass);
    $stmt = $pdo->query("SELECT id, name FROM users");
    while ($row = $stmt->fetch()) {
        echo $row['id'] . ": " . $row['name'] . "\n";
    }
} catch (PDOException $e) {
    echo "Błąd połączenia: " . $e->getMessage();
}
