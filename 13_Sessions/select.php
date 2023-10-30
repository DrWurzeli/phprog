<?php
session_start();
require_once("sc_shop.inc.php");

if(isset($_GET["selection"])){
    ?>
        <form action="<?php echo "cart.php" ?>" method="POST">
    <?php
    echo "<table border='1'><th>Name</th><th>Nummer</th><th>Preis</th><th>Anzahl</th>";
        $sec = $_GET["selection"];
        $size = count($aname[$sec]);
        for($x=0;$x<$size;$x++){
            echo "<tr>";
            echo "<td>".$aname[$sec][$x]."</td>";
            echo "<td>".$artnr[$sec][$x]."</td>";
            echo "<td>".$preis[$sec][$x]." EUR</td>";
            echo "<td><input type='text' name='amount[".$aname[$sec][$x]."]' value=''";
            echo "</tr>";
        }
    echo "</table>";
    ?>
        <input type="submit" value="Zum Warenkorb hinzufügen" name="addCart" />
        </form>
    <?php
}
else{
    echo "Sie haben keine Abteilung ausgewählt.<br>";
}

echo "<br><a href='shop.php'>Zurück zum Shop</a>";