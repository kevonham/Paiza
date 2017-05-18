<?php
$input_lines = trim( fgets(STDIN) );
$data = explode(" ", $input_lines);

$point = explode(" ",  trim( fgets(STDIN) ) );//$data[0]

for ($i=0; $i < $data[1]; $i++) {
    $items = explode(" ", trim( fgets(STDIN) ) );//data[0]
    $all[$i] = 0;
    for ($k=0; $k < $data[0]; $k++) {
        $all[$i] += $point[$k]*$items[$k];
//データの取り出しと計算をループさせる：合計値だけとっておく
    }
}

rsort($all);
//配列を並び替える

for ($i=0; $i < $data[2]; $i++) {
    echo round($all[$i])."\n";
}

/*for ($l=0; $l < $data[1]; $l++) {
$sum[] = $all.$l;
}

for ($m=0; $m < $data[3]; $m++) {
    $num = max($sum);
    echo $num;
    $key = array_search($num, $sum);
    unset($sum[$key]);
}*/

 ?>
