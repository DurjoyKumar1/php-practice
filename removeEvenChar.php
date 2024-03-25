<?php
$word = readline("enter a word: ");
for ($i = 0; $i < strlen($word); $i++) {    
if ($i%2!=0){
    echo $word[$i];

}


}
?>