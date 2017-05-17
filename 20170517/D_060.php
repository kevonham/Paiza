<?php
$input_lines = trim( fgets(STDIN));
$count = explode(" ", $input_lines);

$countb = $count[1]*-1;
echo $count[0]+$countb;
//echo -$count[1]+$count[0];
//echo $count[0]+-$count[1]+;
 ?>
