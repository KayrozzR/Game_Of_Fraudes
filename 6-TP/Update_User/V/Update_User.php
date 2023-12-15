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
 
    <form method="POST" action="login.php">
        <input type="Mail" placeholder="Mail" name="Mail"><br>
        <input type="password" placeholder="Mot de passe" name="password"><br>
        <button type="submit">Connexion</button>
    </form>

    <form method="POST" action="../C/Update_User.action.php">
        <input type="ID_User" placeholder="idUser" name="ID_User"><br>
        <input type="Name_User" placeholder="Nom" name="Name_User"><br>
        <input type="FirstName_User" placeholder="Prenom" name="FirstName_User"><br>
        <input type="Mail" placeholder="Mail" name="Mail"><br>
        <!-- <input type="password" placeholder="Mot de passe" name="password"><br> -->
        <input type="Tel" placeholder="Numéro de tel" name="Tel"><br>
        <button type="submit">Update</button>
    </form>

    <form method="POST" action="../C/Update_Penality.action.php">
        <input type="ID_Penality" placeholder="ID_Penality" name="ID_Penality"><br>
        <input type="Libelle" placeholder="Libelle" name="Libelle"><br>
        <input type="Price" placeholder="Price" name="Price"><br>
        <button type="submit">Update Libelle</button>
    </form>

    <form method="POST" action="../C/Update_Penality.action.php">
        <input type="Nb_Debt" placeholder="Nb_Debt" name="Nb_Debt"><br>
        <input type="Status" placeholder="Status" name="Status"><br>
        <button type="submit">Update Debt</button>
    </form>

    <form method="POST" action="../C/createDebt.action.php">
        <!-- <input type="Nb_Debt" placeholder="Nb_Debt" name="Nb_Debt"><br> -->
        <input type="ID_Penality" placeholder="ID_Penality" name="ID_Penality"><br>
        <input type="ID_User" placeholder="ID_User" name="ID_User"><br>
        <input type="ID_Receiver" placeholder="ID_Receiver" name="ID_Receiver"><br>
        <input type="Date" placeholder="Date" name="Date"><br>
        <input type="Status" placeholder="Status" name="Status"><br>
        <button type="submit">Create Debt</button>
    </form>
    
</body>
</html>