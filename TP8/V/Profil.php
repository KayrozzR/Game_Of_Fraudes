
<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game of Fraudes - Profil </title>
    <link rel="stylesheet" href="Profil.css">
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
                
                <h1>Profile</h1>
                <form action="#" method="POST" class="formRegister">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="firstname">Firstname:</label>
                    <input type="text" id="firstname" name="firstname" required>

                    <label for="mail">Mail:</label>
                    <input type="email" id="mail" name="mail" required>

                    <label for="tel">Tel:</label>
                    <input type="tel" id="tel" name="tel" required>

                    <button type="submit" id="modify-btn">Modify</button>
                    <a href="#" id="disconnect-btn">Disconnect</a>
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