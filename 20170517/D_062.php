<?php
$input_lines=trim( fgets(STDIN) );
$num = explode(" ", $input_lines);

$words = "ABCDEFGHIJ";
$a = 0;
for ($i=0; $i < count($num); $i++) {
    echo substr($words,$a,$num[$i])."\n";
    $a += $num[$i];
//０回目($a, $num[$i] １回目(0,2) ２回目(2,3)　３回目(5,5))
}

/*$words = ["A","B","C","D","E","F","G","H","I","J"];


for ($i=$a; $i < $num[0]; $i++) {
    echo $words[$i];
    $a++;
}
echo "\n";

$a--;
for ($i=$a; $i < $num[1]; $i++) {
    echo $words[$i];
    $a++;
}
echo "\n";

$a--;
for ($i=$a; $i < $num[2]; $i++) {
    echo $words[$i];
}*/
 ?>
