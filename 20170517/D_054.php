<?php
$input_lines = trim( fgets(STDIN));
$length = strlen($input_lines);

if($length >= 11){
    echo "OK";
}
else{
    echo 11-$length;
}
 ?>
