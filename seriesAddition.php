<?php 
$lastNum=readline("Enter last number: ");
$sum=$lastNum;
$num1 =$lastNum;
$a=1;
for ($i= 1; $i < log($lastNum,2)*5; $i++){
$lastNum=$lastNum/2;
$sum += $lastNum;
$a=$a*2;
echo ($a);
echo("+");
}
echo $num1." = ".$sum;




?>