<?php
$input_lines = trim( fgets(STDIN) );
$num = explode(" ", $input_lines);
$input_lines2 = trim( fgets(STDIN) );
$num2 = explode(" ", $input_lines2);

$sum = $num[0] * $num2[1];
$sum2 = $num2[0] * $num[1];
echo $sum - $sum2;
 ?>
