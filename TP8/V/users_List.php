
<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game of Fraudes - Users List</title>
    <link rel="stylesheet" href="users_list.css">
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

            <table>
                <thead>
                    <tr>
                        
                    
                        <th>Firstname</th>
                        <th>Name</th>

                        <th>Mail</th>
                        <th>CPT</th>
                        <th>DEBT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                        <td>John Doe</td>
                        <td></td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                       
                        <td>John Doe</td>
                        <td></td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        
                        <td>John Doe</td>
                        <td></td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        
                        <td>John Doe</td>
                        <td></td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                    
               
                </tbody>
                
            </table>
            <tfoot>
                    <tr>
                        <td colspan="6" class="reset-button">
                            <button onclick="resetFilters()">Reset filters</button>
                        </td>
                    </tr>
                </tfoot>
            <script>
                function resetFilters() {
                    document.getElementById("username").value = "";
                }
            </script>

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


