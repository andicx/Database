<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

    
    $pdo = getDbConnection();
    $stmt = $pdo->prepare("INSERT INTO users (name) VALUES (?)");
    $stmt->execute([$name]);

    
    header("Location: index.php");
    exit();
}
?>
