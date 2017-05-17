<?php
$input_lines = trim( fgets(STDIN));
$name = explode(" ", $input_lines);

switch ($name[1]) {
    case 'F':
        echo "Hi, Ms. ".$name[0];
        break;

    case 'M':
        echo "Hi, Mr. ".$name[0];
        break;

}
 ?>
