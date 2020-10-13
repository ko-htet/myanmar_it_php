<?php
    echo "<table align='center' border='1' cellspacing='0' cellpadding='15'>";
    
    echo "<tr>";
    echo "<th style='background-color:#d3d3d3'></th>";
    $a = 'A';
    do{
        echo "<th style='background-color:#d3d3d3'>$a</th>";
        $a++;
    }while ($a < 'I');
    echo "<th style='background-color:#d3d3d3'></th>";

    for($i = 1; $i < 9; $i++){
        echo "<tr>";
        echo "<th style='background-color:#d3d3d3'>$i</th>";
        for($j = 1; $j < 9; $j++){
            $t = $i + $j;
            if($t % 2 == 0){
                echo "<th style='background-color:white'></th>";
            }else{
                echo "<th style='background-color:black'></th>";
            }
        }
        echo "<th style='background-color:#d3d3d3'>$i</th>";
        echo "</tr>";
    }
    echo "<tr>";
    echo "<th style='background-color:#d3d3d3'></th>";
    $a = 'A';
    do{
        echo "<th style='background-color:#d3d3d3'>$a</th>";
        $a++;
    }while ($a < 'I');
    echo "<th style='background-color:#d3d3d3'></th>";
    echo "</tr>";
    echo "</table>";
?>