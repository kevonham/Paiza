<?php
$input_lines = trim( fgets(STDIN) );
$size = explode(" ", $input_lines);
$sum = $size[2]*$size[1];
if($size[0] <= $sum){
    echo "OK";
}
else{
    echo "NG";
}
 ?>
