<?php
  $array = [13,24,3221,4,5,789,4562,4521,54687,15487,12];

    function find_odd_numbers ($arr){
      $arr2=[];
        foreach ($arr as $value) {
          if(!($value % 2) == 0){
            array_push($arr2,$value) ;
          }
        }
        return $arr2;
    }




 print_r (find_odd_numbers($array));

?>
