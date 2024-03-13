<?php 
function frstAndLastString( $string ) {
$result="";
if ( strlen($string)>2) {
for( $i= 0; $i<2; $i++){
    $result = $result.$string[$i];
}
for ( $i= strlen($string); $i>strlen($string) - 2; $i--){
    $result =$result.$string[$i];
}
echo $result;
}
else{

    echo "Please Enter string which has more than 2 charecter";
}

}
$s=readline("Enter your String: ");
frstAndLastString($s);
?>