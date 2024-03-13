<?php
function iubGrade($marks){

if (100>$marks & $marks>90) {
    echo "A";
}
elseif (90>$marks & $marks>= 85) {
    echo "A-";
}
elseif (85>$marks & $marks>=80) {
    echo "B+";
}
elseif (80>$marks & $marks>=75) {
    echo "B";
}
elseif (75>$marks & $marks>= 70) {
    echo "B-";
}
elseif (70>$marks & $marks>=65) {
    echo "C+";
}
elseif (65>$marks & $marks>=60) {
    echo "C";
}
elseif (60>$marks & $marks>=55) {
    echo "C-";
}
elseif (55>$marks & $marks>=50) {
    echo "D+";
}
elseif (50>$marks & $marks>=45) {
    echo "D";
}
elseif($marks<45){
    echo "F";
}
else{echo"Please input correct number \n";
    $marks = readline("Enter your marks: ");
    iubGrade($marks);
}
}
$marks = readline("Enter your marks: ");
iubGrade($marks);

?>