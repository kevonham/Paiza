<?php
$input_lines=fgets(STDIN);
$num=explode(" ", $input_lines);

for ($i=0; $i<10; $i++) {
    if($i<9){
    $sum=$num[1]*$i;
    echo $num[0]+$sum." ";
    }
    else{
    $sum=$num[1]*$i;
    echo $num[0]+$sum;
    }
}
 ?>
