<?php
session_start();  // Démarrer la session

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION['user_id'])) {
    // L'utilisateur est connecté
    $user_id = $_SESSION['user_id'];
    $user_email = $_SESSION['user_email'];
    $status_message = "Vous êtes connecté en tant que $user_email.";
} else {
    // L'utilisateur n'est pas connecté
    $status_message = "Vous n'êtes pas connecté.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statut de Connexion</title>
</head>
<body>
    <h1>Statut de Connexion</h1>
    <p><?php echo $status_message; ?></p>
</body>
</html>
