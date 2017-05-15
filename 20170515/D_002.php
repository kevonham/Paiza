<?php
$input_lines = trim(fgets(STDIN));
$num=explode(" ",$input_lines);
if($num[0]<$num[1]){
    echo $num[1];
}
elseif($num[0]>$num[1]) {
    echo $num[0];
}
elseif($num[0]==$num[1]){
    echo "eq";
}
?>
