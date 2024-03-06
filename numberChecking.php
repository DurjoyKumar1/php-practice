<?php  
$number = readline("Enter your number: ");
if ($number == 0) {
    echo "the number is not negative or positive";
}
elseif ($number < 0) {
    echo "the number is negative";
}
else{echo"the number is positive";}
?>