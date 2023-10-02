<?php

class Fahrzeug {
    public $farbe = "";
    public $hersteller = "";

    public function starten(){
        echo "Fahrzeug gestartet.<br>";
    }

    public function stoppen(){
        echo "Fahrzeug gestoppt.<br>";
    }
}

$auto = new Fahrzeug();
$auto->starten();
$auto->stoppen();