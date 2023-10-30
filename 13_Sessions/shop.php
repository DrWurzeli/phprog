<?php
session_start();
require_once("sc_shop.inc.php");

echo "<h1>Willkommen im Webshop!</h1>";
echo "<p>Zur Abteilung:<br>";

for($x=0; $x<count($abtname); $x++){
    echo "<a href='select.php?selection=$x'>$abtname[$x]</a><br>";
}

echo "<br><a href='cart.php'>Zum Warenkorb.</a>";