<?php
$input_lines = trim(fgets(STDIN));
if($input_lines<0){
    $input_lines*=-1;
    echo $input_lines;
}
else{
    echo $input_lines;
}
 ?>
