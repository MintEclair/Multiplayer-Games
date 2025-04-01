<?php
$pdo = new PDO("mysql:host=localhost;dbname=your_database", "username", "password");

$stmt = $pdo->prepare("CALL GetPlayers()");
$stmt->execute();
$players = $stmt->fetchAll(PDO::FETCH_ASSOC);

$json_data = json_encode($players, JSON_PRETTY_PRINT);
file_put_contents("players.json", $json_data);

echo "JSON file created successfully!";
?>
<a href="players.json" download>Download JSON</a>
