<html>
    <body>
        <center>
    <table id="news-table" class="table tablesorter">
    <thead>
        <tr>
            <th scope="col" class="header">Voici Mon Tableau!</th>
        </tr>
    </thead>
<?php
// $NbreData : le nombre de données à afficher
// $NbrCol : le nombre de colonnes
// $NbrLigne : calcul automatique AVANT affichage
// -------------------------------------------------------
// (exemple)
$NbrCol = 3;
$tableau = array('Valeur', 'Type', 'Exemple','Chaines de caractères','string',
'Fabien','Nombres entiers','int','3',
'Nombres décimaux','float','14.738',
'Booléens', 'bool', 'true',
'Rien', 'NULL'
);

// -------------------------------------------------------
$NbreData = sizeof($tableau);
// -------------------------------------------------------
// calcul du nombre de lignes
if (round($NbreData/$NbrCol)!=($NbreData/$NbrCol)) {
$NbrLigne = round(($NbreData/$NbrCol)+0.5);
} else {
$NbrLigne = $NbreData/$NbrCol;
}
// -------------------------------------------------------
// affichage
if ($NbreData != 0) {
$k = 0;
echo '<table border="3">';
for ($i=1; $i<=$NbrLigne; $i++)


{
echo '<tr>';
for ($j=1; $j<=$NbrCol; $j++) {
    if ($k<$NbreData) {
        echo '<td>';

          // AFFICHAGE de l'element
    echo $tableau[$k];
          // ------------------------------------------
        echo '</td>';
        $k++;
      } else {    //  case vide
    echo '<td></td>';
    }
}
echo '<tr>';
$j=1;
}
echo '</table>';
} else {
echo 'pas de données à afficher';
}
?>
<center>
</body>
</html> 

