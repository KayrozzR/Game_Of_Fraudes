
<?php
/** @author Tina, Mathilde */

session_start();
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
            <h1>Game of<br> Fraudes</h1>
        </nav>

        <form action="profil.php" method="POST" class="profilButton">
            <button type="submit">PROFIL</button>
        </form>

        <section class="lp">
            <div class="textcenter">
                <p>users </p>
        
                <div class="table-wrapper">


                    <table class="fl-table">
                        <thead>
                            <tr>
                                <th>FirstName</th>
                                <th>Name</th>
                                <th>Mail</th>
                                <th>CPT</th>
                                <th>Delete</th>
                                
                            </tr>
                        </thead>

                        <tr>
            

                            <?php if(isset($_SESSION["user"]) && !empty($_SESSION["user"])) {
                                   foreach ($_SESSION["user"] as $key) {
        ?>

                            <td><?php echo $key['Firstname_User']; ?></td>
                            <td><?php echo $key['Name_User']; ?></td>
                            <td><?php echo $key['Mail']; ?></td>
                            <td><?php echo $key['Cpt_Denonce']; ?></td>

                            <td>
                                <form action="..\C\deleteUser.action.php" method="POST">
                                    <button name="ID_User" value="<?php echo $key['ID_User']; ?>">DELETE</button>
                                </form>
                            </td>

                        </tr>


                        <?php
                        }}
                        ?>
                    </table>   
                </div>
            </div>

            <div class="lp__item stripe">
                <a href="../C/readPenality.action.php" class="stripe__item">
                    <p class="text_slide"> Penalities Tab </p>
                </a>
                <a href="../C/readDebt.action.php" class="stripe__item">
                    <p class="text_slide"> Debt Historique </p>
                </a>
                <a href="../C/readUserList.php" class="stripe__item">
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


