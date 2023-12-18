<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game of Fraudes - Register</title>
    <link rel="stylesheet" href="styleRegister.css">
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

            <div class="textcenter">
                <p>Register</p>
                <br>
                <form action="../C/register.action.php" method="POST" class="formRegister">
                    <input name="name" type="text" minlength="2" maxlength="30" placeholder=" Name" required /><br>
                    <input name="firstname" type="text" minlength="2" maxlength="30" placeholder=" FirstName" required /><br>
                    <input type="email" name="email" placeholder="Email" required /><br>
                    <input type="tel" name="tel" placeholder="Tel" required /><br>
                    <input type="password" name="password" placeholder="Password" minlength="6" required /><br>
                    <button>Submit</button>
                </form>

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

</html>