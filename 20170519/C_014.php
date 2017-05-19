<?php
$data = explode(" ", trim(fgets(STDIN)));
$eddata = $data[1]*2;

for ($i=0; $i < $data[0]; $i++) {
    $boxes = explode(" ", trim(fgets(STDIN)));
        for ($j=0; $j < 3; $j++) {
            if($boxes[$j] < $eddata){
                break;
            }
            elseif($j == 2){
                $numbox[] = $i;
            }
        }
}

$numbox = sort($numbox);
for ($i=0; $i < count($numbox); $i++) {
    echo $numbox[$i]."\n";
}
 ?>
