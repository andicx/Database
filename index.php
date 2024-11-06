<?php
require_once 'db.php';


$pdo = getDbConnection();
$stmt = $pdo->query("SELECT * FROM users");
$names = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SAMPLE DATABASE WEBSITE</title>
</head>
<body>
    <h1>This is a Sample PHP Website</h1>
    <form method="POST" action="submit.php">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <input type="submit" value="Submit">
    </form>

    <h2>Submitted Names:</h2>
    <ul>
        <?php foreach ($names as $user): ?>
            <li><?php echo htmlspecialchars($user['name']); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
