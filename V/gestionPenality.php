<?php

/** @author Mathilde */
session_start();

// Vérifiez si l'utilisateur est connecté
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$isConnected = isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);

if (isset($_SESSION['user_id'])) {
    // L'utilisateur est connecté
    $user_id = $_SESSION['user_id'];
    $user_firstname = $_SESSION['user_Firstname'];
    $status_message = "$user_firstname";
} else {
    // L'utilisateur n'est pas connecté
    $status_message = "Vous n'êtes pas connecté.";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game of Fraudes - Gestion of Penalities</title>
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
     <a href="profil.php" class="profilButton" >PROFIL: <?php echo $status_message; ?> </a>
        </ul>
    </div>


        <section class="lp">

            <div class="textpenalities">
                <p>Penalities</p>
                <br>
                <div class="TabPenality">

                    <div class="table-wrapper">
                        <table class="fl-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Libelle</th>
                                    <th>Price</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tr>
                                <?php foreach ($_SESSION["penality"] as $key) {

                                ?>
                                    <td><?php echo $key['ID_Penality']; ?></td>
                                    <td><?php echo $key['Libelle']; ?></td>
                                    <td><?php echo $key['Price']; ?></td>


                                    <td>
                                        <form action="..\C\deletePenality.action.php" method="POST">
                                            <button name="ID_Penality" value="<?php echo $key['ID_Penality']; ?>">DELETE</button>
                                        </form>
                                    </td>

                            </tr>
                        <?php
                                }

                        ?>
                        </table>
                    </div>
                    <form action="../C/createPenality.action.php" method="POST" class="formRegister">
                        <input name="Libelle" type="text" placeholder="Libelle of the punition" required /><br>
                        <input name="Price" type="text" placeholder="Price of the punition" required /><br>
                        <button>Submit</button>
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