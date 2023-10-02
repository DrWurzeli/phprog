<?php

include "aufgabe08.01.php";

class Auto extends Fahrzeug {
    public $kilometerstand = 0;

    public function fahren($kilometer){
        $this->kilometerstand += $kilometer;
        echo "Neuer Kilometerstand: ".$this->kilometerstand."<br>";
    }
}

$auto = new Auto();
$auto->starten();
$auto->fahren(100);
$auto->stoppen();
