<?php
$input_lines = trim( fgets(STDIN));
if($input_lines > 1){
    echo $input_lines*3;
}
else{
    echo "1";
}
 ?>
