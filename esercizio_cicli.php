<?php
    $iterazioni=7;
    $min=1;
    $max=90;
    for($i=0;$i<$iterazioni;$i++)
    echo rand($min, $max)."<br>";
//ran($min, $max) è la funzione, quindi fuori da ""
//il . mi serve a concatenare
?>