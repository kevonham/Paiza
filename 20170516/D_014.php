<?php
$input_lines = trim(fgets(STDIN));
$str = strtoupper($input_lines);
//strtoupper()=文字列を大文字にする
//strtolower()=文字列を小文字にする
//ucfirst()=頭文字を大文字、ucwords(文字列,区切り文字）=区切り文字ごとに頭文字を大文字
echo $str;
 ?>
