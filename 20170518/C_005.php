<?php
$input_lines = trim( fgets(STDIN) );

for ($i=0; $i < $input_lines; $i++) {

    $ipadd = trim( fgets(STDIN) );
    $num = explode(".", $ipadd);

    $j = 0;
    for($a=0; $a < count($num); $a++) {
        if(count($num) == 4 && 0 <= $num[$a] && $num[$a] <= 256){
        $j++;
        }
    }

    if($j == 4){
        echo "True\n";
    }
    else{
        echo "False\n";
    }

}
 ?>
