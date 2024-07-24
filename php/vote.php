<?php
$host = 'postgres';
$db = 'votes';
$user = 'user';
$pass = 'password';
$dsn = "pgsql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $pass);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vote = $_POST['vote'];
    $stmt = $pdo->prepare('INSERT INTO votes (choice) VALUES (:choice)');
    $stmt->execute(['choice' => $vote]);
    echo 'Merci pour votre vote !';
}
?>
