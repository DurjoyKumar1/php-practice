<?php 
function patternSquare($row, $column) {

    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $column; $j++) {

            echo"+";
        }
        echo"\n";
    }
}
$row = readline("Enter number of row :=====>>> ");
$column = readline("Enter number of column :=====>>> ");
patternSquare($row, $column);
?>