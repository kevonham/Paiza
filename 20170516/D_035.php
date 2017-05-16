<?php
$input_lines=trim(fgets(STDIN));
$date=explode(" ", $input_lines);

echo $date[0]."/".$date[1]."/".$date[2];
 ?>
