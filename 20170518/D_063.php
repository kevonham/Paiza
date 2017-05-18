<?php
for ($i=0; $i < 2; $i++) {
    $input_lines[$i] = trim( fgets(STDIN));
}
$times = explode(" ", $input_lines[0]);


for ($i=0; $i < 5; $i++) {
    if($input_lines[1] < $times[$i]){
        echo $i+1;
        break;
    }
    elseif($i == 4){
        echo "6";
    }
}


 ?>
