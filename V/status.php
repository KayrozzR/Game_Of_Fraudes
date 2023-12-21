<?php
session_start();  // Démarrer la session

// Vérifier si l'utilisateur est connecté

$isConnected = isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);

if (isset($_SESSION['user_id'])) {
    // L'utilisateur est connecté
    $user_id = $_SESSION['user_id'];
    $user_firstname = $_SESSION['user_Firstname'];
    $status_message = "Vous êtes connecté en tant que $user_firstname.";
} else {
    // L'utilisateur n'est pas connecté
    $status_message = "Vous n'êtes pas connecté.";
}
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Inscription</title>
</head>


<div class="button-container">
    <?php if ($isConnected): ?>

        <form method="post" action="..\C\logout.action.php">
            <input type="submit" name="logout" value="Se déconnecter" class="logout-btn">
        </form>
    <?php endif; ?>
</div>


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
