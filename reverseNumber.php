<?php 
$number= readline("Enter number: ");
$c=strlen($number=(string)$number);
for ($i= 0; $i < $c; $i++) {
$a=$number%10;
echo $a;
$number=floor($number/10);
}


?>