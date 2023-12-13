<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inscription/Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 
    <form method="POST" action="Subscribe_User.php">
        <input type="Name_User" placeholder="Nom" name="Name_User"><br>
        <input type="FirstName_User" placeholder="Prenom" name="FirstName_User"><br>
        <input type="Mail" placeholder="Mail" name="Mail"><br>
        <input type="password" placeholder="Mot de passe" name="password"><br>
        <input type="Tel" placeholder="Numéro de tel" name="Tel"><br>
        <button type="submit">Inscription</button>
    </form>
 
    <hr>
 
    <form method="POST" action="login.php">
        <input type="Mail" placeholder="Mail" name="Mail"><br>
        <input type="password" placeholder="Mot de passe" name="password"><br>
        <button type="submit">Connexion</button>
    </form>
    
</body>
</html>