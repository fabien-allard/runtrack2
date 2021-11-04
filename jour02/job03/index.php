<?php

$i=0;
    
        while ($i <=100) {
    
        if ($i >= 0 && $i <=20) {
            echo "<i>",$i,"</i><br>";
            //Les nombres de 0 à 20 tout est en italique
        }

        elseif ($i >= 25 && $i <=50) {
            echo "<u>" ,$i, "</u><br>";

            // les nombres De 25 à 50 sont surligné
    }
    
            elseif  ($i==42)
                echo "La Plateforme_";
                // Affiche La Plateforme_  qui est remplacé par 42
            else {echo $i,"<br>";}
    $i++;
}
?>