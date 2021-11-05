<html>
<body>
    <center>
<table id="table" class="argument/valeur">
    <thead>
        <tr>
            <th scope="col" class="header">Tableau de 2 colonnes "Argument et Valeur"</th>
        </tr>
    </thead>
    <center>
<?php

$NbrCol = 2;
$tableau = array('Argument : ', 'Valeur : ', 'Prenom','Fabien','nom',
'Allard','age','23','taille',
'1m80','nationalité','française',
'pays', 'France', 'true',
'1', 'False', '0'
);

$NbreData = sizeof($tableau);
// 
// calcul du nombre de lignes des colonnes du tableau
if (round($NbreData/$NbrCol)!=($NbreData/$NbrCol)) {
$NbrLigne = round(($NbreData/$NbrCol)+0.5);
} else {
$NbrLigne = $NbreData/$NbrCol;
}

// Affichage 
if ($NbreData != 0) {
$k = 0;
echo '<table border="3">';
echo'<br>';
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
if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["age"]) && isset($_POST["nationalité"]) && isset($_POST["date de naissance"]))
{echo "<h2> votre nom ". $_POST["nom"]. " votre  prénom ".$_POST["prenom"]." votre age".$_POST["age"].$_POST["nationalité"]." votre nationalité".$_POST["date de naissance"]."votre date de naissance". "</h2>";}
echo '<tr>';
$j=1;
}
echo '</table>';
} else {
echo 'pas de données à afficher';
}
?>
<div id="container">
            <!-- zone de connexion -->
            <h1>Teste Formulaire<h1>
            <center>
                <form action="index.php" method="POST">
                <label><b>Your Name :</b></label>
                <input type="text" name="name" placeholder="Write your name" >
                <br/><br/>
                <label><b>Your FistName :</b></label>
                <input type="text" name="FirstName" placeholder="Write your FirstName" >
                <br/><br/>
                <label><b>Your Age : </b></label>
                <input type="text" name="Age" placeholder="Write your Age" >
                <br/><br/>
                <label><b>Your nationality : </b></label>
                <input type="text" name="nationality" placeholder="Write your nationality" >
                <br/><br/>
                <label><b>Your Date of Birth : </b></label>
                <input type="text" name="Date of Birth" placeholder="Write your Date of Birth" >
                <br/><br/>
                <input type="submit" name='envoie' value='Envoyer' >
                <center>

        
            </form>
        </div>
</body>
</html>