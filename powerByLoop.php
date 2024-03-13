<?php 
$number = readline();
$list=(explode(" ", $number));
$multiply= 1;
for ($i = 0; $i < $list[1]; $i++){
    $multiply *= $number[0];
}
echo"$multiply";


?>