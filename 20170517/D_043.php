<?php
$input_lines = trim( fgets(STDIN));
    if ($input_lines <= 30) {
        echo "sunny";
    }
    elseif($input_lines <= 70){
        echo "cloudy";
    }
    elseif(70 <= $input_lines){
        echo "rainy";
    }
 ?>
