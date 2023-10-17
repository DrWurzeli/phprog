<?php  /*
Ermöglichen Sie mit einem PHP-Programm das Hinzufügen von Datensätzen zu der
Tabelle fp der Datenbank hardware.
*/ ?>

<html>
<head>
    <title>Add data</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
    <p>Datensatz absenden:<br>

    <input name="hersteller"/>
    <label for="hersteller">Hersteller</label><br>
    <input name="typ"/>
    <label for="typ">Typ</label><br>
    <input name="gb"/>
    <label for="gb">GB</label><br>
    <input name="preis"/>
    <label for="preis">Preis (als Nachkommastelle mit Punkt)</label><br>
    <input name="artikelnummer"/>
    <label for="artikelnummer">Artikelnummer</label><br>
    <input name="datum"/>
    <label for="datum">Datum der Erstproduktion (YYYY-MM-DD)</label><br>

    <input type="submit" value="Daten absenden" name="send" />
    <input type ="reset"/>
    </form>
    <p>Alle Daten <a href="">anzeigen</a>.<br>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['send'])
    &&isset($_POST['hersteller']) && isset($_POST['typ']) && isset($_POST['gb']) && isset($_POST['gb']) && 
    isset($_POST['preis']) && isset($_POST['artikelnummer']) && isset($_POST['datum'])){
        $con = mysqli_connect("", "root", "");
        mysqli_select_db($con, "hardware");
        if($con){
            mysqli_select_db($con, "hardware");
            $sql = "INSERT INTO fp (hersteller, typ, gb, preis, artnummer, prod)";
            $sql .= "VALUES ('".$_POST['hersteller']."', '".$_POST['typ']."', '".$_POST['gb']."', '".$_POST['preis']."', '"
            .$_POST['artikelnummer']."', '" .$_POST['datum']."')";
            mysqli_query($con, $sql);
            $num = mysqli_affected_rows($con);
            echo "Affected rows: $num<br>";
        }
}
?>