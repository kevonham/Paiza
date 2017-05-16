<?php
for ($i=0; $i <5; $i++) {
    $input_lines[$i] = trim(fgets(STDIN));
}
echo max($input_lines)."\n";
//配列を渡した場合には、最も大きい数値を返す
echo min($input_lines);
 ?>
