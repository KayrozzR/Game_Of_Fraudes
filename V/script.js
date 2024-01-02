function trierTableau(colonne, typeTri) {
    var tableau, lignes, i, x, y, doitEchanger;
    tableau = document.getElementById("monFormulaire");
    doitEchanger = true;
  
    while (doitEchanger) {
      doitEchanger = false;
      lignes = tableau.rows;
  
      for (i = 1; i < lignes.length - 1; i++) {
        x = lignes[i].getElementsByTagName("td")[colonne];
        y = lignes[i + 1].getElementsByTagName("td")[colonne];
  
        var valeurX = (typeTri === 'numérique') ? parseFloat(x.innerHTML) : x.innerHTML;
        var valeurY = (typeTri === 'numérique') ? parseFloat(y.innerHTML) : y.innerHTML;
  
        if (valeurX > valeurY) {
          lignes[i].parentNode.insertBefore(lignes[i + 1], lignes[i]);
          doitEchanger = true;
          break;
        }
      }
    }
  }
  


  function disableCheckbox() {
    // Désactive les checkbox après avoir soumis le formulaire
    var checkboxes = document.getElementsByClassName("paiementCheckbox");
    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].disabled = true;
    }
}
