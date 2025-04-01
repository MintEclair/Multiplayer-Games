<?php
$pdo = new PDO("mysql:host=localhost;dbname=your_database", "username", "password");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $playerName = $_POST["playerName"];
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Secure hashing

    $stmt = $pdo->prepare("CALL InsertPlayer(:playerName, :username, :password)");
    $stmt->execute(["playerName" => $playerName, "username" => $username, "password" => $password]);

    echo "Player added successfully!";
}
?>
<form method="post">
    Player Name: <input type="text" name="playerName" required>
    Username: <input type="text" name="username" required>
    Password: <input type="password" name="password" required>
    <button type="submit">Add Player</button>
</form>
