<?php
$input_lines = trim( fgets(STDIN) );
$season = explode(" ", $input_lines);

$num = 0;
for ($i=0; $i < 10; $i++) {
    if($season[$i] === "W"){
    $num++;
    }
}

if($num < 5){
    echo "NG";
}
else{
    echo "OK";
}
 ?>
