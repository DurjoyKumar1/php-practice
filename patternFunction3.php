<?php 
function patternSquare($row, $column) {

    for ($i = 1; $i < $row+1; $i++) {
        for ($j = $i; $j>0; $j--) {

            echo("+");
        }
        echo"\n";
    }
}
$row = readline("Enter number of row :=====>>> ");
$column = readline("Enter number of column :=====>>> ");
patternSquare($row, $column);
?>