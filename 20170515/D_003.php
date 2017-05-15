<?php
$input_lines = fgets(STDIN);

for ($i=1; $i<10; $i++) {
    if($i<10-1){
    echo $input_lines*$i." ";
    }
    else{
    echo $input_lines*$i;
    }
}
 ?>
