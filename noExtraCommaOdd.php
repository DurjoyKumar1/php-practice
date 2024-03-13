<?php 
$start = readline("");
$end = readline("");
if ($end%2 != 0) {
for ($i = $start; $i < $end-1; $i= $i+1) {
if($i%2!= 0) {

    echo "$i".",";
}

}
echo"$end";
}
else {
    for ($i = $start; $i < $end-1; $i= $i+1) {
        if($i%2!= 0) {
        
            echo "$i".",";
        }
        
        }

        echo $end-1;

}

?>