<?php

    foreach($_GET as $value){
    echo $value."<br/>";
}
?>




<!-- Debut du formulaire -->
<center>
<form  action="./index.php" method="Get">
        <legend>Formulaire :</legend>
        <br />
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