<?php
for($i = 0; $i < 5; $i++){
    $input_lines[$i] = trim( fgets(STDIN));
}
for ($i = 0; $i < 4; $i++) {
    $sum = $input_lines[$i+1]-$input_lines[$i];
    echo $sum."\n";
}
 ?>
