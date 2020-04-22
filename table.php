<?php

$rowCount = !isset($_GET['rowCount']) ?  : $_GET['rowCount'] ;

if ($rowCount >= 10) {
    $color = 0;
    $deltaColor = 255 / ($rowCount - $rowCount / 5) ;
    
    $table = '<table style="border:1; height:98%; width:100%; color:red;">';
        for ($tr=1; $tr<=$rowCount; $tr++) {
            $table .= '<tr>';
            if ($tr % 5 == 0) {
                $table .= '<th style="background-color:rgb(102,255,0);">'. $tr .'</th>';
            } else {
                $table .= '<th style="background-color:rgb('.$color.','.$color.','.$color.');">'. $tr .'</th>';
                $color += $deltaColor;
            }
            $table .= '</tr>';
        }
    $table .= '</table>';
    
    echo $table;
} else {
    echo "Введено некорректное значение !";
}

?>



