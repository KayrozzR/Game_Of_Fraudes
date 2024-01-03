
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
    $user_mail = $_SESSION['user_Mail'];
    $user_tel = $_SESSION['user_Tel'];
    $user_name = $_SESSION['user_Name'];
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
     <a href="profil.php" class="profilButton" >PROFIL: <?php echo $status_message; ?> </a>
        </ul>
    </div>

        <section class="lp">

            <div class="textcenter">
                
                <p>Profil</p>
                <form action="../C/updateUser.action.php" method = "POST"></form>
                <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                            <tr>
                                <th>FirstName</th>
                                <th>Name</th>
                                <th>Mail</th>
                                <th>Tel</th>
                                
                            </tr>
                        </thead>

                        <tr>
                            <?php 
                                   foreach ($_SESSION["recup"] as $key) {
                            ?>

                            <td><?php echo $key["FIRSTNAME_USER"]; ?></td>
                            <td><?php echo $key['NAME_USER']; ?></td>
                            <td><?php echo $key['MAIL']; ?></td>
                            <td><?php echo $key['TEL']; ?></td>
                            
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
                        <div class="button-group">
                        <li><a href="modifyProfil.php" id="modify-btn">Modify</a></li>
                    </div>

                    </table>   
                </div>
                
                <?php if ($isConnected): ?>
                <form method="post" action="..\C\logout.action.php">
                  <!-- <a href="..\C\logout.action.php" id="disconnect-btn">Disconnect</a> -->
                <input type="submit" name="logout" value="Se déconnecter" class="logout-btn">
                </form>
                <?php endif; ?>
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