<?php 
$monthNumber =readline("Enter the serial number of month: ");
if ($monthNumber == 1||$monthNumber ==3|| $monthNumber ==5||$monthNumber ==7||$monthNumber ==8||$monthNumber ==10||$monthNumber ==12){
    echo"31 is the number of days in this month";}
    
elseif ($monthNumber ==2){
    echo "28 is the number of days in this month";
}
else{

    echo "30 is the number of days in this month";
}
?>