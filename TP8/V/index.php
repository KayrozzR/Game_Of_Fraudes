<<<<<<< HEAD:TP8/V/index.php
<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Game of Fraudes - Index</title>
  <link rel="stylesheet" href="styleIndex.css">
  <link href='https://fonts.googleapis.com/css?family=Julius Sans One' rel='stylesheet'>
</head>

<body>
  <div class="pageIndex">
    <nav>
      <h1>Game of<br> Fraudes</h1>
    </nav>

    <form action="profil.php" method="POST">
      <button type="submit">PROFIL</button>
    </form>

    <section class="lp">
      <div class="lp__item text">
        <div class="textcenter">
          <p>Welcome to the Game of Fraudes</p>
          <br>
          <form action="../C/login.action.php" method="POST">
            <button>LOGIN</button>
          </form>
        </div>
      </div>



      <div class="lp__item stripe">
        <a href="gestionPenality.php" class="stripe__item">
          <p class="text_slide"> Penalities Tab </p>
        </a>
        <a href="historicDebt.php" class="stripe__item">
          <p class="text_slide"> Debt Historique </p>
        </a>
        <a href="userList.php" class="stripe__item">
          <p class="text_slide"> User List </p>
        </a>
        <a href="penalityForm.php" class="stripe__item">
          <p class="text_slide"> Denounce </p>
        </a>
      </div>

    </section>
  </div>
</body>

=======
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
>>>>>>> a706ae9df6f4993670d601d5f8b50b55b8ab40c6:V/index.php
</html>