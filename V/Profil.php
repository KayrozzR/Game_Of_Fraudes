
<?php
/** @author Tina */
session_start();

// Vérifiez si l'utilisateur est connecté
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game of Fraudes - Profil </title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Julius Sans One' rel='stylesheet'>
</head>

<body>
    <div class="pageIndex">
    <nav>   
     <h1> <a href="index.php">Game of<br> Fraudes </a></h1>
   </nav>
    <div>
     <ul class="nav navbar-nav navbar-nav-first">
       <a href="profil.php" class=profilButton>PROFIL</a>
        </ul>
    </div>

        <section class="lp">

            <div class="textcenter">
                
                <p>Profil</p>
                <form action="#" method="POST" class="formProfil">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="firstname">Firstname:</label>
                    <input type="text" id="firstname" name="firstname" required>

                    <label for="mail">Mail:</label>
                    <input type="email" id="mail" name="mail" required>

                    <label for="tel">Tel:</label>
                    <input type="tel" id="tel" name="tel" required>
                    <div class="button-group">
                        <li><a href="#" id="disconnect-btn">Disconnect</a></li> 
                        <li><button type="submit" id="modify-btn">Modify</button></li>
                    </div>

                   
                    
                </form>
                
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