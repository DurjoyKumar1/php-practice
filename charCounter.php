<?php
$sentence = readline("Enter your sentence: ");
$sentence = explode(" ", $sentence);
foreach ($sentence as $s){
    $a = 0;
    foreach ($sentence as $k){
        if ($k == $s){
            $a +=1;
        }
    }
    echo $s ." : $a \n";
    $a=0; 
}


?>