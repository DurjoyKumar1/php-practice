<?php 
function patternSquare($row, $column) {

    for ($i = 0; $i < $row; $i++) {
        for ($j = $column-$i; $j>0; $j--) {

            echo("+");
        }
        echo"\n";
    }
}
$row = readline("Enter number of row :=====>>> ");
$column = readline("Enter number of column :=====>>> ");
patternSquare($row, $column);
?>