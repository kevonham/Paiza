<?php
$input_lines=trim(fgets(STDIN));
$name=explode(" ", $input_lines);

$first=substr($name[0],0,1);
$second=substr($name[1],0,1);

echo $first.".".$second;
 ?>
