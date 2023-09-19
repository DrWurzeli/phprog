<?php
    //dice game random numbers till 25

    //setup
    $p1 = $p2 = array();
    $winner = "game is still going on";

    //dice roll helper function
    function rollDice(array $arr){
        $newRoll = random_int(1, 6);
        $arr[] = $newRoll;
        //echo $newRoll." ";
        return $arr;
    };

    //run
    while(array_sum($p1) < 25 && array_sum($p2) < 25){
        $p1 = rollDice($p1);
        $p2 = rollDice($p2);
    }

    //end scenario (winning, draw)
    if (array_sum($p1) > array_sum($p2)){
        $winner = "player 1";
    }
    elseif (array_sum($p1) == array_sum($p2)){
        $winner = "draw";
    }
    else $winner = "player 2";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>1v1</title>
</head>    
<body>
    <h1>game of dice</h1>
    <p>both players roll until one reaches 25</p>
    <?php
        echo "winner: ".$winner;
    ?>
</body>
</html>