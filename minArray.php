<?php 
$list = array();
$numOfTime=readline("Enter loop time: ");
for ($i= 0; $i < $numOfTime; $i++) {    
    $num=readline("Enter loop time: ");
    array_push($list,$num);

}
$min = $list[0];
for ($i= 0; $i < count($list); $i++) {
if ($list[$i] < $min) {
    $min = $list[$i];


}

}

print_r($min)."\n";
print_r(array($list));
//
?>