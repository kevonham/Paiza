<?php
$input_lines = trim( fgets(STDIN));
$num = explode(" ", $input_lines);

$sum = $num[0]**3;
$sum1 = $num[1]**3;

echo $sum - $sum1;
 ?>
