<?php
$tag = explode(" ", trim(fgets(STDIN)));
$input_lines = trim(fgets(STDIN));

while(strpos($input_lines, $tag[0]) !== false ){
    $string = strstr($input_lines, $tag[0]);
    $addstring = substr($string, strlen($tag[0]));
    $output = strstr($addstring, $tag[1], true);

    if(strlen($output) > 0){
        echo $output."\n";
    }
    else{
        echo "<blank>\n";
    }

    $input_lines = strstr($addstring, $tag[1]);
    // $input_lines = substr($fstring, strlen($tag[1]));

}
 ?>
