<?php

/** @author Mathilde */
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game of Fraudes - Register</title>
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
                <p>Register</p>
                <br>
                <form action="../C/register.action.php" method="POST" class="formRegister">
                    <input name="Name_User" type="text" minlength="2" maxlength="30" placeholder="Name_User" required /><br>
                    <input name="FirstName_User" type="text" minlength="2" maxlength="30" placeholder="FirstName" required /><br>
                    <input type="email" name="Mail" placeholder="Email" required /><br>
                    <input type="tel" name="Tel" placeholder="Tel" required /><br>
                    <input type="password" name="password" placeholder="Password" minlength="6" required /><br>
                    <button>Submit</button>
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