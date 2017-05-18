<?php
$input_lines = trim( fgets(STDIN));

switch($input_lines[0]){
    case "4":
    echo "error";
    break;

    case "2":
    echo "ok";
    break;

    default:
    echo "unknown";
}
 ?>
