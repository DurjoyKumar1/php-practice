<?php
function digitAddition($n)
{

    $n = (string) $n;
    if (strlen($n) == 6) {
        echo "Yes. This is a six digit number. Now go for next step ====>>>>> \n";
       $addition= 0;
       $n= (integer)$n;
        for ($i = 0; $i < 6; $i++) {
            $mod = $n % 10;
            $addition = $addition + $mod;
            $n =floor( $n / 10);
        


        }
        echo $addition;

    } else {
        echo "This is not six digits number. Input again \n";

        $number = readline("Enter six digits number: ");
        digitAddition($number);

    }

}
$number = readline("Enter six digits number: ");
digitAddition($number);

?>