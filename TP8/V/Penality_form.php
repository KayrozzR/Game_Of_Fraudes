<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mettre à jour Penality</title>
</head>
<body>

    <h2>Mettre à jour Penality</h2>

    
    <form method="post" action="Update_Penality.action.php">
        <label for="id_penality">ID Penality :</label>
        <input type="text" name="id_penality" value="<?php  ?>">

        <label for="libelle">Libellé :</label>
        <input type="text" name="libelle" value=" ">

        <label for="price">Prix :</label>
        <input type="text" name="price" value="<?php  ?>">

        <button type="submit">Mettre à jour Penality</button>
    </form>

</body>
</html>