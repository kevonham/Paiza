<?php
$input_lines = trim(fgets(STDIN));
$far = explode(" ", $input_lines);

switch($far[1]){
    case "cm":
    echo $far[0]*10;
    break;

    case "m":
    echo $far[0]*100*10;
    break;

    case "km":
    echo $far[0]*1000*100*10;
    break;

}
 ?>
