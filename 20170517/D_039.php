<?php
for ($i=0; $i<3; $i++) {
    $input_lines[$i] = trim( fgets(STDIN));
}
$gadge = $input_lines[0] === $input_lines[1];
$gadge2 = $input_lines[1] === $input_lines[2];
//三つの比較はできない
if($gadge&&$gadge2){
    echo "YES";
}
else{
    echo "NO";
}
 ?>
