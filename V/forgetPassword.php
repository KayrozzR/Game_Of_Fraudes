<?php
session_start();  // Démarrer la session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Forget Password</title>
</head>
<body>
    <h1>Statut de Connexion</h1>
    <p><?php echo $status_message; ?></p>


    // Formulaires/formulaire_recuperation_mot_de_passe.php
<form action="forgetPassword.action.php" method="post">
    <label for="email">Adresse e-mail :</label>
    <input type="email" name="email" required>
    <input type="submit" value="Réinitialiser le mot de passe">
</form>

</body>
</html>
