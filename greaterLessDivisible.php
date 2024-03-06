<?php 
$number  = readline("Enter your number: ");
if ($number >50 and $number < 100 and ($number%7==0 or $number%3== 0)) {
    echo "yes";}

else{

    echo "No";
}
?>