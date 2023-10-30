<?php
session_start();

if(isset($_POST["amount"])){
    var_dump($_POST["amount"]);
}

if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"])){
    ?>
        <form action="<?php echo "checkout.php" ?>" method="POST">
    <?php
        echo "<table border='1'><th>Name</th><th>Nummer</th><th>Preis</th><th>Anzahl</th>";
        for($x=0; $x<count($_SESSION["cart"]); $x++){
            echo "<tr>";
            echo "<td>".$_SESSION["cart"][$x][0]."</td>";
            echo "</tr>";
            echo "</table>";
        }
    ?>
        <input type="submit" value="Zur Kasse" name="checkout" />
        </form>
    <?php
}
else{
    echo "<br>Sie haben noch keine Artikel hinzugefügt.<br>";
}

echo "<br><a href='shop.php'>Zurück zum Shop</a>";