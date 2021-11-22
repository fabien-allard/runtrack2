<?php
$bdd = mysqli_connect('localhost','root','', 'jour08');
mysqli_set_charset($bdd, 'utf8');
$requete = mysqli_query($bdd,"SELECT COUNT(*) AS nb_etudiants FROM etudiants" );
$etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table&Requete</title>
</head>
<body>
    <center>
    <table cellspacing="5", border=3>
        <thead>
            <th>nb_etudiants</th>
    </thead>


<tbody>
<?php
foreach($etudiants as $etudiant){
    echo '<tr>';
    foreach($etudiant as $infos => $value){
    echo '<td>'.$value.'</td>';
    }
    echo '</tr>';
}
?>
<center>
</tbody>
</table>
</html>