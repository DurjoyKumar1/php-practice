<?php 
$word =readline("Enter a word for checking: ");
if (strlen($word) >3) {
if (substr($word,-3) == "ing") {
    echo $word."ly";}
else{

    echo $word."ing";
}
}
else{echo $word;}


?>