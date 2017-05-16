<?php
 $input_lines = trim(fgets(STDIN));
 $years=explode(" ", $input_lines);

echo $years[1]-$years[0];
 ?>
