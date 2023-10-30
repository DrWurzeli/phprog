<?php
session_start();

if(isset($_POST["amount"])){
    $_SESSION["article"] = "test";
}

if($isset($_SESSION["article"])){
    ?>
        <form action="<?php echo "checkout.php" ?>" method="POST">
    <?php
        echo "<table border='1'><th>Name</th><th>Nummer</th><th>Preis</th><th>Anzahl</th>";
        echo "<tr>";
        echo "</tr>";
        echo "</table>";
    ?>
        <input type="submit" value="Zur Kasse" name="checkout" />
        </form>
    <?php
}
else{
    echo "Sie haben noch keine Artikel hinzugefügt.<br>";
}


echo "<br><a href='shop.php'>Zurück zum Shop</a>";