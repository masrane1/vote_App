<?php
$host = 'postgres';
$db = 'votes';
$user = 'postgres';
$pass = 'root';
$dsn = "pgsql:host=$host;dbname=$db";
try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $vote = $_POST['vote'];
        $stmt = $pdo->prepare('INSERT INTO votes (choice) VALUES (:choice)');
        $stmt->execute(['choice' => $vote]);
        echo 'Merci pour votre vote !';
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
