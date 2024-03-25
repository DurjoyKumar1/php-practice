<?php 
$word1=readline("Enter your first word: ");
$word2=readline("Enter your second word: ");
if (strlen($word1) and strlen($word2) >= 3){

echo substr($word2,0,2).substr($word1,-1).substr($word1,0,-1).substr($word2,2);

}
else{
    echo $word2.$word1;
}

?>