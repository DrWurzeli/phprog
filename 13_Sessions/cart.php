<?php
session_start();
require_once("sc_shop.inc.php");
?>
    <h2>Warenkorb</h2>
    <form action="<?php echo "checkout.php" ?>" method="POST">
    <table border='1'><th>Name</th><th>Nummer</th><th>Preis</th><th>Anzahl</th>
<?php

if(isset($_GET["selection"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
    $sec = $_GET["selection"];
    for($x=0; $x<count($aname[$sec]); $x++){
        if(intval($_POST["amount"][$x]) > 0) $_SESSION["amount"][$sec][$x] = intval($_POST["amount"][$x]);
    }
}

if(isset($_SESSION["amount"])){
        for($i=0; $i<count($abtname); $i++){
            for($j=0; $j<count($aname[$i]);$j++){
                if(isset($_SESSION["amount"][$i][$j])){
                    echo "<tr>";
                    echo "<td>".$aname[$i][$j]."</td>";
                    echo "<td>".$artnr[$i][$j]."</td>";
                    echo "<td>".$preis[$i][$j]."</td>";
                    echo "<td>".$_SESSION["amount"][$i][$j]."</td>";
                    echo "</tr>";
                }
            }
        }
    }
?>
    </table>
    <a href="<?php echo "shop.php"; ?>">Weiter einkaufen</a>
    <input type="submit" value="Zur Kasse" name="checkout" />
    </form>