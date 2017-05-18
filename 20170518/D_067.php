<?php
$input_lines = trim( fgets(STDIN));

$num = $input_lines % 2;
if(/*$input_lines % 2 =*/ $num == 0){
    echo "OFF";
}
else{
    echo "ON";
}
 ?>
