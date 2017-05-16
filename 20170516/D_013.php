<?php
$input_lines = trim(fgets(STDIN));
$num = explode(" ", $input_lines);

echo floor($num[0]/$num[1])." ".$num[0]%$num[1];
//floor()=切捨て、ceil()=切り上げ、round()=四捨五入
 ?>
