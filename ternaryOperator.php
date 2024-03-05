<?php 
$a=readline("Enter your value: ");
$result= ($a>25)? "$a is greater than 25":"$a is less than 25";
echo $result;
?>


<?php 
$a=readline("Enter your value: ");
$result= ($a>25)? "$a is greater than 25":(($a>20)? "$a is less than 25 but grater than 20 ": "$a also less than 25");
echo $result;
?>