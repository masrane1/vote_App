<?php
$host = 'postgres';
$db = 'votes';
$user = 'root';
$pass = 'root';
$dsn = "pgsql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $pass);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vote = $_POST['vote'];
    $stmt = $pdo->prepare('INSERT INTO votes (choice) VALUES (:choice)');
    $stmt->execute(['choice' => $vote]);
    echo 'Merci pour votre vote !';
}
