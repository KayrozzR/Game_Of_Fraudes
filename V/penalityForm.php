<?php
/** @author Tina */
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
    <title>Game of Fraudes - Penality</title>
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

            <div class="textcenter">
                <p>Denounce</p>
                <br>

                <form action="..\C\createDebt.action.php" method="POST" class="formPenality">

                    <label for="denounceWho">Who: </label>
                    <select name = "Firstname_User" placeholder = "Firstname_User">
                        <option value ="">Select a firstname</option>
                        <?php foreach ($_SESSION ["userList"] as $key) :?> 
                            <option value="<?php echo $key ["Firstname_User"] ?>">
                                <?php echo $key ["Firstname_User"]." ".$key ["Name_User"] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                     <br>
                    <label for="denounceWhy">Why: </label>                
                    <select name = "Libelle" placeholder = "Libelle">
                      <br>
                        <option value ="">Select a label</option>
                        <?php foreach ($_SESSION ["penality"] as $key) :?> 
                            <option value="<?php echo $key ["Libelle"] ?>">
                                <?php echo $key ["Libelle"] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                    <br>
                    <textarea name="Detail"   id="Detail" placeholder="Detail" rows="4" required></textarea>
                    <br>
                    <button type="submit">Denounce!</button>
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