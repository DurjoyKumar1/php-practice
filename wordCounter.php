<?php 
    $sentence = readline("enter your sentence: ");
    $count=1;
    if ($sentence == "" or $sentence == " ") {
        $count = 0;
        echo"$count";
    }       
    else{    
    for ($i = 0; $i < strlen($sentence)-1; $i++) {
    if ($sentence[$i] == " ") {
        $count +=1;
    } 
}
echo $count;
}

?>
