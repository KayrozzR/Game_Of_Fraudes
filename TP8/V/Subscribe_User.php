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
 
    <form method="POST" action="../C/register.action.php">
        <input type="Name_User" placeholder="Nom" name="Name_User"><br>
        <input type="FirstName_User" placeholder="Prenom" name="FirstName_User"><br>
        <input type="Mail" placeholder="Mail" name="Mail"><br>
        <input type="password" placeholder="Mot de passe" name="password"><br>
        <input type="Tel" placeholder="Numéro de tel" name="Tel"><br>
        <button type="submit">Inscription</button>
    </form>
 
    <hr>
 
    <form method="POST" action="../C/login.action.php">
        <input type="Mail" placeholder="Mail" name="Mail"><br>
        <input type="password" placeholder="Mot de passe" name="password"><br>
        <button type="submit">Connexion</button>
    </form>
    <br>

    <form method="POST" action="../C/test.action.php">
<input type="ID_User" name="ID_User">
<button type="submit">Delete</button>
    </form>
    <br>
    <form method ="POST" action="../C/test.action.php">
        <input type="text" placeholder="Libelle" name="Libelle"><br>
        <input type="text" placeholder="Price" name="Price"><br>
        <button type="submit">Create Penality</button>
    </form>
<br>

    <form action="../C/test.action.php" method = "POST">
        <input type="text" placeholder="Who?" name="Name_User"><br>
        <input type="text" placeholder="Why?" name="Libelle"><br>
        <input type="text" placeholder="Details: " name="Details"><br>
        <button type="submit">Denounce !</button>
    </form>

</body>
</html>