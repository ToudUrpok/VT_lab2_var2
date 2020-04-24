<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            TABLE {
                 border:1;
                 height:98%; 
                 width:100%;
                 color:red;
            }
        </style>
    </head>
    <body>
        <form method="GET">
            <label for="rowsAmount">Введите количество строк:</label>
            <input type="number" name="rowsAmount" id="rowsAmount" min="10" max="100" autofocus required/>
            <input type="submit" value="показать таблицу" name="button"/>
        </form>
        
        <?php
            if (isset($_GET['button'])) {
                define("ROWSAMOUNT", $_GET['rowsAmount']);
                $color = 0;
                $deltaColor = 255 / (ROWSAMOUNT - ROWSAMOUNT / 5) ;

                $table = '<table>';
                    for ($tr=1; $tr<=ROWSAMOUNT; $tr++) {
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
            }
        ?>
    </body>
</html>