<?php 
function factorial($num){
    echo "|=============||===========|\n";
    echo "|=============||===========|\n";
    echo "|=============||===========|\n";
    echo "|============================|\n";
    echo"| ";
    $fact = 1;
    for ($i = $num; $i > 0; $i--) {
        $fact *= $i;
        if ($i ==1){
            echo $i;
        }
        else { 
        echo $i." X ";}
}

echo " = ". $fact."|"."\n";
echo "|============================|\n";
}
$number = readline("Enter your number: ====>>>>>>>>>>> ");
factorial($number);
?>