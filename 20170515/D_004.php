<?php
 $input_lines = fgets(STDIN);
 //一行目を取り出す。二回目は二行目
  echo "Hello ";
  for ($i=0; $i<$input_lines; $i++) {
      $name = trim(fgets(STDIN));
      //同じ変数は使えない
      if ($i<$input_lines-1){
          echo $name.",";
      }
      else{
          echo $name.".";
      }
  }
  ?>
