<?php
$data = explode(" ", trim(fgets(STDIN)));
$shade = trim(fgets(STDIN));

for ($i=0; $i < $shade; $i++) {
$points = explode(" ", trim(fgets(STDIN)));
$num = $points[0]-$data[0];
$num1 = $points[1]-$data[1];
$sum = $num**2+$num1**2;
    if($sum >= $data[2]**2){
        echo "silent\n";
    }
    else{
        echo "noisy\n";
    }
}
 ?>
