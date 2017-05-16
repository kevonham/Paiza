<?php
$input_lines = trim( fgets(STDIN) );
$input_lines2 = trim( fgets(STDIN) );

if ($input_lines2 % $input_lines > 0) {
    echo ceil($input_lines2 / $input_lines);
}
elseif ($input_lines2 % $input_lines === 0) {
    echo $input_lines2 / $input_lines;
}
 ?>
