<?php
$input_lines = trim( fgets(STDIN));
$words = explode(" ", $input_lines);

if($words[0] === "J" && $words[1] === "J"){
    $words[1] = "Q";
}
echo $words[0]." ".$words[1];

/*$word = $words[0] === $words[1];
$word1 = $words[0] === "J"
if($word === $words){
    echo "J Q";
}
else{
    echo $words[0]." ".$words[1];
}*/
 ?>
