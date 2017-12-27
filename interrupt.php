<?php

  $list_of_vowels=["а","е","ё","и","о","у","ы","э","ю","я","А","Е","Ё","И","О","У","Ы","Э","Ю","Я"];
  $elements=["Груша","яблоко","мандарин","бегемот","винни","обезьяна"];



    for($i=0; $i<count($elements); $i++){
        for ($j=0; $j<=count($list_of_vowels); $j++) {
          if(mb_substr($elements[$i], 0,1) == $list_of_vowels[$j]){
              break;
          } else if ($j == count($list_of_vowels) ) {
            echo $elements[$i] . "</br>";
          }
        }
    }

 ?>
