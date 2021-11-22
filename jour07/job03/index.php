<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
session_start();
$_SESSION='prenom';
if (isset($_SESSION['prenom'])){
    $_SESSION['prenom'] = 0;

} else{
    $_SESSION['prenom'] ++;
}

echo $_SESSION['prenom'];
echo '<form action="index.php">';
echo '<input type="button" value="reset"';
echo '</form>';

?>

<form class="box" action="index.php" method="">
    <h1 class="box-title">Formulaire</h1>
    <input type="text"  name="prenom" />
    <input type="submit" name="submit" value="Envoie" />
</form>
</body>
</html>