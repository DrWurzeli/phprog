<?php

function vermerk($vorname, $nachname, $abteilung) {
    echo "Programm von ".$vorname." ".$nachname." Abteilung: ".$abteilung;
    echo "<br>";
    echo "E-Mail: ".$vorname.".".$nachname."@".$abteilung."phodevel.de";
}

vermerk("Bodo", "Berg", "FE2");
echo "<br><br>";
vermerk("Hans", "Heim", "SU3");