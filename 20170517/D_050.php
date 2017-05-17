<?php
$input_lines = trim( fgets(STDIN));
$num = explode(" ", $input_lines);

switch($num[0]){
    case $num[0] < 5:
        $sum = $num[0];
    break;

    default:
        $sum = 5;
}
switch ($num[1]) {
    case $num[1] < 5:
        $sum1 = $num[1];
        break;

    default:
        $sum1 = 5;
        break;
}

echo $sum + $sum1;
 ?>
