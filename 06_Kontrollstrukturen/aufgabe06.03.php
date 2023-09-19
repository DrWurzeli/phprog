<?php
    //dice game random numbers till 25

    $p1 = $p2 = array();
    $winner = "";

    function rollDice(){
        $zahl1 = random_int(1, 6);
        $zahl2 = random_int(1, 6);
        $p1[] = $zahl1;
        $p2[] = $zahl2;
    };

    while(array_sum($p1) < 25 && array_sum($p2) < 25){
        rollDice();
    }

    if (array_sum($p1) > array_sum($p2)){
        $winner = "player 1";
    }
    elseif (array_sum($p1) == array_sum($p2)){
        $winner = "none";
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
    <?php
        echo "the winner is: ".$winner;
    ?>
</body>
</html>