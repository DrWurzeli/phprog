<?php

function vermerk($vorname, $nachname, $abteilung) {
    echo "Programm von ".$vorname." ".$nachname." Abteilung: ".$abteilung;
    echo "<br>";
    echo "E-Mail: ".strtolower($vorname).".".strtolower($nachname)."@".strtolower($abteilung)."phpdeve1.de";
}

vermerk("Bodo", "Berg", "FE2");
echo "<br><br>";
vermerk("Hans", "Heim", "SU3");