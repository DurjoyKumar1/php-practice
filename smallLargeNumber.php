<?php 
$num1 = readline("Enter the 1st number: ");
$num2 = readline("Enter the 2nd number: ");
$num3 = readline("Enter the 3rd number: ");

if ($num1>$num2 && $num1 > $num3){

    echo "$num1 is grater than $num2 and $num3";
}
elseif ($num3>$num2 && $num3 > $num2){

    echo "$num3 is grater than $num1 and $num2";
}
else{echo "$num2 is grater than $num1 and $num3";}


?>