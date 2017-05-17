<?php
$n = 0;
for ($i=0;$i<7; $i++) {
    $input_lines[$i] = trim( fgets(STDIN));
    if($input_lines[$i]<=30){
        $n++;
    }
}
echo $n;
 ?>
