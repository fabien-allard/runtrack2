<?php

function occurrences( string $str, $char){

    $j=0;

        for($i =0; isset($str[$i]);
        $i++){

        if ($str [$i] ==$char){
        $j++;
    }
}


return $j;
}
echo occurrences ("Bienvenue sur Marseille","e");
echo "<br>", occurrences("Travaux","r");

?>