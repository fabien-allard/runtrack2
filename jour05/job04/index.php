<?php

function calculate($a, $operation, $b)
{
    if($operation=="-")
    return $a-$b;

    elseif ($operation=="*"){
        return $a*$b;
    }

    elseif ($operation=="+"){
        return $a+$b;
    }

    elseif ($operation=="%"){
        return $a%$b;
    }

    elseif ($operation=="/"){
        return $a/$b;
    }
}


echo calculate(8,"+",5);
echo "<br/>" ,calculate(26,"-",15);
echo "<br/>" ,calculate(26,"*",4);
echo "<br/>" ,calculate(26,"%",6);
echo "<br/>" ,calculate(26,"/",8);

?>