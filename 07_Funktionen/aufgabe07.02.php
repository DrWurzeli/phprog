<?php

$summe = $produkt = 0;

function rechne($zahl1, $zahl2, &$summe, &$product){
    $summe = $zahl1+$zahl2;
    $product = $zahl1*$zahl2;
}

rechne(7,5, $summe, $produkt);
echo "Die Summe von 7 und 5 ist: ".$summe;
echo "<br>";
echo "Das Produkt von 7 und 5 ist: ".$produkt;