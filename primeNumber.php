<?php 
$number = readline("enter a number for checking Prime number: ");
$a="";
if ($number ==2) {
    echo "Prime";}
    else if ($number == 1) {
        echo "Not Prime";
    }
else{
for( $i = 2; $i < $number; $i++ ) {
if (  $number % $i==0 ) {
    $a="Not Prime";
    echo $a;}
break;

}
if ($a!="Not Prime") {
    echo "Prime";
}

}

?>