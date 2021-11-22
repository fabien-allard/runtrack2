<?php
echo "Bienvenue visiteurs";
?>
<?php
session_start();
$_SESSION='nbvisites';
if (isset($_SESSION['nbvisites'])){
    $_SESSION['nbvisites'] = 0;

} else{
    $_SESSION['nbvisites'] ++;
}

echo $_SESSION['nbvisites'];
echo '<form action="index.php">';
echo '<input type="button" value="reset"';
echo '</form>';

?>
