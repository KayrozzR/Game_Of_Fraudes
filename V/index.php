<?php

/** @author Mathilde */
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Game of Fraudes - Index</title>
  <link rel="stylesheet" href="style.css">
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
          <form action="login.php" method="POST">
            <button>LOGIN</button>
          </form>
        </div>
      </div>



      <div class="lp__item stripe">
        <a href="../C/readPenality.action.php" class="stripe__item">
          <p class="text_slide"> Penalities Tab </p>
        </a>
        <a href="../C/readDebt.action.php" class="stripe__item">
          <p class="text_slide"> Debt Historique </p>
        </a>
        <a href="../C/readUser.action.php" class="stripe__item">
          <p class="text_slide">User List </p>
        </a>
        <a href="penalityForm.php" class="stripe__item">
          <p class="text_slide"> Denounce </p>
        </a>
      </div>

    </section>
  </div>
</body>

</html>