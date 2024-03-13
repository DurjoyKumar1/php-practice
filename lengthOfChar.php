<?php 
function charCounter($word){
$count = 0;
for ($i=0; isset($word[$i]); $i++) {
    if ($word[$i] != " ") {
    $count +=1;}
}
echo $count;
}
$words=readline("enter your word: ");
charCounter($words);

?>