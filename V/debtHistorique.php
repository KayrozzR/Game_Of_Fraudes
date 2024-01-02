
<?php
/** @author Tina, Mathilde */

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
    <title>Game of Fraudes - Users List</title>
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
                <p>Historique</p>
        
                <div class="table-wrapper">
                    <table class="fl-table" id="monFormulaire" >
                        <thead>
                        <tr>
                            <th onclick="trierTableau(0)">Victim</th>
                            <th onclick="trierTableau(1)">Why?</th>
                            <th onclick="trierTableau(2)">Details</th>
                            <th onclick="trierTableau(3)">When?</th>
                            <th onclick="trierTableau(4)">Price</th>
                            <th onclick="trierTableau(5)">Status</th>
                            <th onclick="trierTableau(5)">Paid</th>
    </tr>
                        </thead>
                        <form action="..\C\readDebt.action.php" method="post" onsubmit="disableCheckbox()">
                        <tr>
                              <?php if(isset($_SESSION["debt"]) && !empty($_SESSION["debt"])) {
                                   foreach ($_SESSION["debt"] as $key) { ?>

                            <td><?php echo $key['Firstname_User']; ?></td>
                            <td><?php echo $key['Libelle']; ?></td>
                            <td><?php echo $key['Detail']; ?></td>
                            <td><?php echo $key['Date']; ?></td>
                            <td><?php echo $key['Price']; ?></td>
                            <td><?php echo $key['Status']; ?></td>
                            <td> <input type="checkbox" id="paiement" name="paiement" value="1" /></td>
                        </tr> <?php
                               }} ?>
                    </table> 
                    <th>Total to paid: </th>
                    <td> 0€</td>
                    <br>
                    <input type="submit" value="PAID!">
                </form>
                <br>
<div>
            <p>Total Debt = </p>
</div>
                
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
    <script src="script.js"></script>
</body>

</html>


