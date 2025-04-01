<?php
$pdo = new PDO("mysql:host=localhost;dbname=your_database", "username", "password");

$stmt = $pdo->prepare("CALL GetPlayers()");
$stmt->execute();
$players = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table border="1">
    <tr><th>ID</th><th>Player Name</th><th>Username</th></tr>
    <?php foreach ($players as $player): ?>
        <tr>
            <td><?= htmlspecialchars($player['playerID']) ?></td>
            <td><?= htmlspecialchars($player['playerName']) ?></td>
            <td><?= htmlspecialchars($player['username']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
