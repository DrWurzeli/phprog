<?php
session_start();

echo "Bestellung erfolgreich. Warenkorb geleert.";

session_destroy();

echo "<br><a href='shop.php'>Zurück zum Shop</a>";