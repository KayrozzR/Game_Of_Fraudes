<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Inscription</title>
</head>
<body>
    <h2>Inscription</h2>
    <form action="..\C\login.action.php" method="post">
        <label for="Mail">Email:</label>
        <input type="Mail" name="Mail" required><br>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>
