<?php

    foreach($_POST as $value){
    echo $value."<br/>";
}
?>




<!-- Debut du formulaire -->
<center>
<form  action="./index.php" method="Post">
        <legend>Formulaire :</legend>
        <br /> <br />
        Pseudo : <input type="text" name="Pseudo" value="">
        <br /><br/>
        Nom : <input type="text" name="Nom" value="">
        <br /><br/>
    Prénom : <input type="text" name="prenom" value="">
    <br /><br/>

    Sexe : 
    <input type="radio" name="sexe" value="F">Femme
    <input type="radio" name="sexe" value="H">Homme
    <br /><br/>
    Pays :
    <select name="pays">
        <option value="France">France</option>
        <option value="Belgique">Belgique</option>
        <option value="Suisse">Suisse</option>
        <option value="Canada">Canada</option>
</select>
<br /><br/>

<input type="submit" value="Envoyer">
<br />
</form>
<center>