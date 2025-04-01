<?php
$pdo = new PDO("mysql:host=localhost;dbname=your_database", "username", "password");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $playerID = $_POST["playerID"];
    $playerName = $_POST["playerName"];
    $username = $_POST["username"];

    $stmt = $pdo->prepare("CALL UpdatePlayer(:playerID, :playerName, :username)");
    $stmt->execute(["playerID" => $playerID, "playerName" => $playerName, "username" => $username]);

    echo "Player updated successfully!";
}
?>
<form method="post">
    Player ID: <input type="number" name="playerID" required>
    Player Name: <input type="text" name="playerName" required>
    Username: <input type="text" name="username" required>
    <button type="submit">Update Player</button>
</form>
