<?php
$grade = trim( fgets(STDIN));
$input_lines = trim( fgets(STDIN));
$gift = explode(" ", $input_lines);

echo $gift[$grade-1];
 ?>
