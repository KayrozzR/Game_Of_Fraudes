<!DOCTYPE html>
<?php session_start();?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inscription/Connexion</title>
    <link href="style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>ID_User</th>
            <th>FirstName_User</th>
            <th>Name_User</th>
            <th>Tel</th>
            <th>Mail</th>
            
        </tr>
        </thead>
        <tbody>
  
    <tr>
        <?php foreach ($_SESSION["userList"]as $key) {
             ?>
        <td><?php echo $key['ID_User'];?></td>
        <td><?php echo $key['Name_User'];?></td>
        <td><?php echo $key['Firstname_User'];?></td>
        <td><?php echo $key['Tel'];?></td>
        <td><?php echo $key['Mail'];?></td>
        
        
        <!-- <td>
            <form action="..\C\adminDeleteStudent.action.php" method = "POST">
                <button name="ID_User" value = "<?php echo $key['ID_User']; ?>"><i class='bx bx-trash'></i></button>
            </form>
        </td> --> 
    </tr>
    <?php
  }
  ?>
  
  <tbody>
    </table>
 
    <form method="POST" action="../C/register.action.php">
        <input type="Name_User" placeholder="Nom" name="Name_User"><br>
        <input type="FirstName_User" placeholder="Prenom" name="FirstName_User"><br>
        <input type="Mail" placeholder="Mail" name="Mail"><br>
        <input type="password" placeholder="Mot de passe" name="password"><br>
        <input type="Tel" placeholder="Numéro de tel" name="Tel"><br>
        <button type="submit">Inscription</button>
    </form>
 
    <hr>
 
    <form method="POST" action="login.php">
        <input type="Mail" placeholder="Mail" name="Mail"><br>
        <input type="password" placeholder="Mot de passe" name="password"><br>
        <button type="submit">Connexion</button>
    </form>

    <form method="POST" action="../C/Update_User.action.php">
        <input type="ID_User" placeholder="idUser" name="ID_User"><br>
        <input type="Name_User" placeholder="Nom" name="Name_User"><br>
        <input type="FirstName_User" placeholder="Prenom" name="FirstName_User"><br>
        <input type="Mail" placeholder="Mail" name="Mail"><br>
        <!-- <input type="password" placeholder="Mot de passe" name="password"><br> -->
        <input type="Tel" placeholder="Numéro de tel" name="Tel"><br>
        <button type="submit">Update</button>
    </form>

    <form method="POST" action="../C/Update_Penality.action.php">
        <input type="ID_Penality" placeholder="ID_Penality" name="ID_Penality"><br>
        <input type="Libelle" placeholder="Libelle" name="Libelle"><br>
        <input type="Price" placeholder="Price" name="Price"><br>
        <button type="submit">Update Libelle</button>
    </form>

    <form method="POST" action="../C/Update_Penality.action.php">
        <input type="Nb_Debt" placeholder="Nb_Debt" name="Nb_Debt"><br>
        <input type="Status" placeholder="Status" name="Status"><br>
        <button type="submit">Update Debt</button>
    </form>

    <div class = "formButton">
  <form enctype = "multipart/form-data" action = "../C/readUser.action.php" method = "POST">
    <label for="prenom">Afficher la salle de classe</label>
    <input type = "submit"/>
  </form>
</div>
</div>
    <form method="POST" action="../C/createDebt.action.php">
        <!-- <input type="Nb_Debt" placeholder="Nb_Debt" name="Nb_Debt"><br> -->
        <input type="Libelle" placeholder="Libelle" name="Libelle"><br>
        <input type="Firstname_User" placeholder="Firstname_User" name="Firstname_User"><br>
        <input type="Firstname_User" placeholder="Non du receveur" name="Firstname_User"><br>
        <input type="Date" placeholder="Date" name="Date"><br>
        <input type="Status" placeholder="Status" name="Status"><br>
        <button type="submit">Create Debt</button>
    </form>

    <!-- <select name = "ID" placeholder = "ID">
                        <option value ="">Select an ID</option>
                        <?php foreach ($_SESSION ["full_list"] as $student) :?> 
                            <option value="<?php echo $student ["ID"] ?>">
                                <?php echo $student ["ID"] ?>
                            </option>
                        <?php endforeach ?>
                    </select> -->
    
</body>
</html>