<?php
session_start();

// Vérifiez si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // Vérifiez si la case à cocher a été cochée
    if (isset($_POST["paiement"]) && $_POST["paiement"] == "1") {
        // Case à cocher cochée, effectuez le traitement approprié
        // Par exemple, vous pouvez mettre à jour la base de données ou effectuer d'autres actions nécessaires

        // Désactivez la case à cocher pour éviter une double soumission
        echo '<script>disableCheckbox();</script>';
    }
}
header("Location:../V/debtHistorique.php");
?>
