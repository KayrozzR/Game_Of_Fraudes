<?php
/** @author Tina */
session_start ();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game of Fraudes - Penality</title>
    <link rel="stylesheet" href="Penality_form.css">
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
                <p>Denounce</p>
                <br>
                <form action="#" method="POST" class="formPenality">
                    <label for="denounceWho">Who: </label>
                    <input name="denounceWho" type="text" minlength="2" maxlength="30"  required><br>

                    <label for="denounceWhy">Why: </label>
                    <input name="denounceWhy" type="text" minlength="2" maxlength="30" required /><br>

                    <textarea name="denounceDetails"   id="denounceDetails" placeholder="Details" rows="4" required></textarea>
                    
                    <button type="submit">Denounce!</button>
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