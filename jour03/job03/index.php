<?php

$str ="I'm sorry Dave I'm afraid I can't do that.";

$Lettres= false;

for ($i = 0; isset($str[$i]); $i++)
    if ($str[$i] == "a" OR  $str[$i] == "e" OR $str[$i] == "i" OR $str[$i] == "o" OR $str[$i] == "u" OR $str[$i] == "y" OR
        $str[$i] == "A" OR $str[$i] == "E" OR $str[$i] == "I" OR $str[$i] == "O" OR $str[$i] == "U" OR $str[$i] == "Y"){
    echo $str[$i];
}

else {
    echo $Lettres;
}
?>