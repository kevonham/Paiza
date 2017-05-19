<?php
$hnum = trim(fgets(STDIN));
$room = trim(fgets(STDIN));
$none = O;

for ($i=0; $i < $room; $i++) {
    $num = (string)trim(fgets(STDIN));
        for ($j=0; $j < strlen($num); $j++) {
            if($num[$j] == $hnum){
                $none++;
                break;//直近のループをbreakする
            }
            elseif($j == strlen($num)-1){
            echo $num."\n";
            }
        }
}
if($none == $room){
    echo "none";
}
 ?>
