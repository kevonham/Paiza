<?php
$input_lines = trim( fgets(STDIN));
$sum = 0;
for ($i=1; $i < $input_lines+1; $i++) {
    $sum += $i;
}
echo $sum;
 ?>
