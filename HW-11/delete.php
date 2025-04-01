<?php
$pdo = new PDO("mysql:host=localhost;dbname=your_database", "username", "password");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $playerID = $_POST["playerID"];

    $stmt = $pdo->prepare("CALL DeletePlayer(:playerID)");
    $stmt->execute(["playerID" => $playerID]);

    echo "Player deleted successfully!";
}
?>
<form method="post">
    Player ID: <input type="number" name="playerID" required>
    <button type="submit">Delete Player</button>
</form>
