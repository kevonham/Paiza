<?php
$input_lines = trim(fgets(STDIN));
$input_lines2 = trim(fgets(STDIN));

echo substr($input_lines, 0, $input_lines2);
//substr(文字列, スタート位置, 長さ)
 ?>
