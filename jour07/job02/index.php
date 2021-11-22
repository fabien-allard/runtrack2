<?php

if (isset($_COOKIE['nbvisites'])){
    $nbpeople=0;
    
}
else{
    $nbpeople=$_COOKIE['nbvisites'];
}

$nbpeople++;
setcookie(['nbvisites', $nbpeople],time()-3600);

echo $_COOKIE['nbvisites'];
echo '<form>';
echo '<input type="button" value="reset">';
echo '</form>';
?>