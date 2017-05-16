<?php
$input_lines=trim(fgets(STDIN));
$words=explode(" ", $input_lines);

echo substr($words[0], $words[1]-1, 1);
 ?>
