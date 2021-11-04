<?php

for ($n=1 ; $n <=100 ; $n++)
    if ($n >= 1 && $n <=20){
        echo "$n", "<br>";
    }

    elseif ($n %3 && $n%5){
        echo "FizzBuzz", "<br>";
    }

        elseif ($n %3){
            echo "Buzz", "<br>";
        }

            elseif ($n >= 40 && $n <=60){
                echo "n", "<br>";
            }
                elseif ($n %5){
                    echo "Fizz", "<br>";
                }  

?>