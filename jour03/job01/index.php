<?php
$Table = array(200,204,173,98,171,404,459); //Ont déclare des valeurs dans un tableau

foreach($Table as $n){      //Si ont met la valeur dans la variables des nombres
    $r =$n % 2;                 //Et qu'on les divise par 2

    if ($r == 0){               //Et que l'ont obtient 0 
        echo $n, 'est pair</br>';                   //Alors ont Affiche pairs
    }
    else{//Sinon
        echo $n, 'est impair</br>';      //ont affiche impairs
    }
    }

?>