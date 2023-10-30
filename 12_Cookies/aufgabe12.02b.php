<?php

if(isset($_POST["nachname"]) && isset($_POST["vorname"])
&& !empty($_POST["nachname"]) && !empty($_POST["vorname"])){
    echo "<h2>Bestätigung.</h2>";
    echo "Ihre Ware wird versandt, ".
    htmlspecialchars($_POST["vorname"]). " ".
    htmlspecialchars($_POST["nachname"]). ".";

    if(!isset($_COOKIE["vorname"]) && !isset($_COOKIE["name"])){
        setcookie("nachname", $_POST["nachname"], time()+300);
        setcookie("vorname", $_POST["vorname"], time()+300);
    }
}
else{
    echo "<h2>Fehler.</h2>";
    echo "Sie haben keine Angaben zur Person gemacht.";
}
echo "<br><a href='aufgabe12.02a.php'>Zurück</a>";