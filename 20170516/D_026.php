<?php
for ($i=0; $i<7; $i++) {
    $input_lines[$i]=trim(fgets(STDIN));
    if($input_lines[$i]==="no"){
    $n++;
    }
}
echo $n;
 ?>
