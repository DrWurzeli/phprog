<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>1v1</title>
    <style>
        th, td {
            text-align: center;
        }
        table {
            border-spacing: 10px;
        }
    </style>
</head>    
<body>
<?php
    //dice game random numbers till 25
    //setup
    $p1 = $p2 = array();
    $winner = "";
    $round = 1;

    //run
    echo "<table>";
    echo "<th>Round</th><th>Player1</th><th>Player2</th>";
    while(array_sum($p1) < 25 && array_sum($p2) < 25){
        echo "<tr>";
        echo "<td>$round</td>";
        echo "<td>".$p1[] = random_int(1, 6)."</td>";
        echo "<td>".$p2[] = random_int(1, 6)."</td>";        
        echo "</tr>";
        $round++;
    }
    echo "<th>Sum:</th><th>".array_sum($p1)."</th><th>".array_sum($p2)."</th>";
    echo "</table>";

    //end scenario (winning, draw)
    if (array_sum($p1) > array_sum($p2)){
        $winner = "player 1";
    }
    elseif (array_sum($p1) == array_sum($p2)){
        $winner = "draw";
    }
    else $winner = "player 2";

    //output result
    echo "<br>The winner is: ".$winner;
?>
</body>
</html>