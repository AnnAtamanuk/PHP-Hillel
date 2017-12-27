<?php

$rows = 5; // количество строк, tr
$cols = 5; // количество столбцов, td

$table = '<table border="friends">';

for ($tr=1; $tr<=$rows; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){
        $table .= '<td>'. $tr*$td .'</td>';
    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table; // сделали эхо всего 1 раз

?>