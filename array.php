<?php
$n=123456;
$addition= 0;
 for ($i = 0; $i < 6; $i++) {
     $mod = $n % 10;
     $addition = $addition + $mod;
     //echo $addition."\n";
     $n=$n/10;
     $n =floor( $n );
     //echo $n;
}
echo $addition;

?>