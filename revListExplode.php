<?php
$sentence = readline("Write a sentence: ");
$sentence = explode(" ", $sentence);
print_r(array_reverse($sentence));
?>