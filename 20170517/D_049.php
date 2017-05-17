<?php
$input_lines = trim( fgets(STDIN));
if(strpos($input_lines, "noaki") === false/*boolean型*/ ){
//strpor()は探す文字列が何番目に出てくるのか　先頭にあると０を返す＝false 
    echo $input_lines;
}
else{
    $cut = 5;
    echo substr($input_lines, 0, strlen($input_lines)-$cut);
//strlen($input_lines)は全部の長さ
}

 ?>
