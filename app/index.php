<?php
$dsn = 'mysql:host=db;dbname=testdb;charset=utf8';
$user = 'testuser';
$pass = 'testpass';

try {
    $pdo = new PDO($dsn, $user, $pass);
    $stmt = $pdo->query("SELECT id, name FROM users");
    echo "<h1>WERSJA 2</h1>"
    while ($row = $stmt->fetch()) {
        echo $row['id'] . ": " . $row['name'] . "\n";
    }
} catch (PDOException $e) {
    echo "Błąd połączenia: " . $e->getMessage();
}
