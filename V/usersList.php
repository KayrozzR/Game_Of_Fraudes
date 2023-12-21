
<?php
session_start ();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game of Fraudes - Users List</title>
    <link rel="stylesheet" href="usersList.css">
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
        
        <h2>Users </h2>

        <section class="lp">

            

            <div class="filter-section">
                <label for="username">Filter by Username:</label>
                <input type="text" id="username" name="username">
            </div>

            <div class="table-wrapper">
                        <table class="fl-table">
                            <thead>
                                <tr>
                                    <th>FirstName</th>
                                    <th>Name</th>
                                    <th>Mail</th>
                                    <th>CPT</th>
                                </tr>
                            </thead>
                            <tr>
                                

                                <?php foreach ($_SESSION["user"] as $key) {
                                    

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
                                }

                        ?>
                        </table>
                    </div>
            
           

        </section>
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

        
    </div>
</body>

</html>


