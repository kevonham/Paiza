<?php
$input_lines = trim(fgets(STDIN));
$str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
//文字列は配列に格納
for ($i=0; $i<strlen($str); $i++) {
    if ($input_lines===$str[$i]){
    echo $i+1;
    }
}
 ?>
