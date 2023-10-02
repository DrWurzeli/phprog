<?php

ini_set("error_reporting", 32767);

try{
    if (isset($c) && isset($a)){
        $c = 2 * $a;
        echo "<p>$c<p>";
    }
    else throw new Exception("Variable nicht gesetzt.");
} catch (Exception $e){
    echo "Fehler: ".$e->getMessage()."<br>";
}

try{
    $x = 24;
    for($y = 4; $y>-3; $y--){
        if ($y <> 0){
            $z = $x / $y;
            echo "$x / $y = $z <br>";
        }
        else throw new Exception("Division durch 0");
    }
} catch(Exception $e){
    echo "Division ungültig: ".$e->getMessage()."<br>";
}

try{
    if(function_exists("fkt")){
        //fkt();
        echo "Ende";
    } else throw new Exception("Funktion existiert nicht.", 0);
} catch(Exception $e){
    echo $e->getMessage()."<br>";
}
