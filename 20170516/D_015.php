<?php
$input_lines=trim(fgets(STDIN));
$num=$input_lines;
for ($i=0; $i<$num; $i++) {
    echo $input_lines."\n";
    $input_lines-=1;
}
 ?>
