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

            <div class="textdenounce">
                <p>Denounce</p>
                <br>
                <form action="..\C\createDebt.action.php" method="POST" class="formPenality">

<!-- Utilisateur connecté -->
<input type="hidden" name="idUser" value="<?php echo $_SESSION['user_id']; ?>">

<label for="denounceWhom">Whom: </label>
<select name="idReceiver" placeholder="idReceiver">
    <option value="">Select a firstname</option>
    <?php foreach ($_SESSION["userList"] as $key) : ?>
        <option value="<?php echo $key["ID_User"] ?>">
            <?php echo $key["Firstname_User"] . " " . $key["Name_User"] ?>
        </option>
    <?php endforeach ?>
</select>
<br>
                     <label for="denounceWhy">Why: </label>
                      <select name="Libelle" placeholder="Libelle" id="denounceWhy">
                        <option value="">Select a label</option>
                          <?php foreach ($_SESSION["penality"] as $key) :?>
                            <option value="<?php echo $key["Libelle"] ?>">
                              <?php echo $key["Libelle"] ?>
                            </option>
                        <?php endforeach ?>
                      </select>
                       <br>
    <div id="retardMultiplier" style="display: none;">
        <label for="multiplier">Multiplier x10min: </label>
        <select name="Multiplier">
            <option value="1">1x</option>
            <option value="2">2x</option>
            <option value="3">3x</option>
            <option value="4">4x</option>
            <option value="5">5x</option>
        </select>
        <br>
    </div>

    <textarea name="Detail" id="Detail" placeholder="Detail" rows="4" required></textarea>
    <br>
    <button type="submit">Denounce!</button>

    <script>
        document.getElementById('denounceWhy').addEventListener('change', function () {
            var retardMultiplier = document.getElementById('retardMultiplier');
            if (this.value === 'Retard') {
                retardMultiplier.style.display = 'block';
            } else {
                retardMultiplier.style.display = 'none';
            }
        });
    </script>

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
        <a href="../C/formDenounce.action.php" class="stripe__item">
          <p class="text_slide"> Denounce </p>
        </a>
      </div>

        </section>
    </div>
</body>

</html>