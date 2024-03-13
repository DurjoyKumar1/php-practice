<?php 
$num =readline("Enter a number: " );
$num = (string) $num;
if ( $num == strrev( $num ) ) {
    echo"Symetric";}
else{
    echo"Not Symetric";
}



?>