<?php
$input_lines = trim( fgets(STDIN));
$st = explode(" ", $input_lines);

$sum = $st[1]-$st[0];

if($st[0] < $st[1]){
    echo $sum;
}
elseif($sum == 0){
    echo "0";
}
else{
    echo "No";
}
 ?>
