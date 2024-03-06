<?php 

$number =15.02; //readline("Enter a integer or float number");
//Terminal is not showing boolean reasult that's why we need to run it on browser and browser is not loading readline function.
//so we run a hardcode.
if (is_integer($number) ==true) {
    echo "This is an int number";}
elseif(is_float($number)==true){

    echo "the number is a float number";
}
?>