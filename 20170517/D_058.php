<?php
$input_lines = trim( fgets(STDIN));
$num = explode(" ", $input_lines);

echo str_repeat("A", $num[0]);
echo str_repeat("B", $num[1]);
echo str_repeat("A", $num[2]);

 ?>
