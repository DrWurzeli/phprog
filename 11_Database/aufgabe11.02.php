<?php
/*
Zeigen Sie mit einem PHP-Programm aus der Tabelle fp der Datenbank hardware
nur noch bestimmte Informationen an. Es sollen alle Festplatten mit den Angaben
zu Hersteller, Typ, Artikelnummer und erstem Produktionsdatum angezeigt werden,
die im ersten Halbjahr 2008 erstmalig produziert wurden, und zwar sortiert nach
Datum. Das Programm soll die folgende Ausgabe erzeugen, basierend auf den
ursprünglichen Daten.
*/
$from_date = '2008-01-01';
$to_date = '2008-06-31';

$con = mysqli_connect("","root", "");
mysqli_select_db($con, "hardware");
$sql = "select * from fp";
$sql .= " where prod >= '" .$from_date. "' AND prod <= '" .$to_date. "'";
$sql .= " order by prod";
$res = mysqli_query($con, $sql);
$num = mysqli_num_rows($res);
echo "$num Datensätze gefunden<br />";
while ($dsatz = mysqli_fetch_assoc($res)){
    /*
    foreach($dsatz as $e){
        echo $e.", ";
    }
    echo "<br>";
    */
    echo $dsatz["hersteller"] . ", " . $dsatz["typ"] . ", " . $dsatz["artnummer"] . 
    ", " . $dsatz["prod"] . "<br />";
}
mysqli_close($con);