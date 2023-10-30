<?php
session_start();
require_once("sc_shop.inc.php");

if(isset($_GET["selection"])){
    $sec = $_GET["selection"];
    ?>
        <form action="<?php echo "cart.php?selection=$sec" ?>" method="POST">
    <?php
    echo "<h2>Abteilung: ".htmlspecialchars($abtname[$sec])."</h2>";
    echo "<table border='1'><th>Name</th><th>Nummer</th><th>Preis</th><th>Anzahl</th>";
        $size = count($aname[$sec]);
        for($x=0;$x<$size;$x++){
            echo "<tr>";
            echo "<td>".$aname[$sec][$x]."</td>";
            echo "<td>".$artnr[$sec][$x]."</td>";
            echo "<td>".$preis[$sec][$x]." EUR</td>";
            echo "<td><input type='text' name='amount[".$x."]'";
            if(isset($_SESSION["amount"][$sec][$x])) echo "value='".$_SESSION["amount"][$sec][$x]."'";
            echo "</td>";
            echo "</tr>";
        }
    echo "</table>";
    ?>  
        <input type="submit" value="Zum Warenkorb hinzufügen"/>
        <a href="<?php echo "shop.php"; ?>">Andere Kategorie ansehen</a>
        </form>
    <?php
}
else{
    echo "Sie haben keine Abteilung ausgewählt.<br>";
    echo "<br><a href=''>Zurück zum Shop</a>";
}