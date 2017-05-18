<?php
$input_lines = trim( fgets(STDIN));

if(strpos($input_lines, "False") === false){
    echo $input_lines;
}

else{
    echo str_replace("False", "True", $input_lines);    
}
 ?>
