<?php

class Math{
    public static function wurzel($wert){
        echo "Quadratwurzel von: ".$wert." ist: ".sqrt($wert)."<br>";
    }

    public static function absolut($wert){
        echo "Absoluter Wert von: ".$wert." ist: ".abs($wert)."<br>";
    }
}

Math::absolut(-5);
Math::absolut(10);
Math::wurzel(4);
Math::wurzel(81);
