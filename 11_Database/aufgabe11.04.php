<?php
/*
Zeigen Sie mit einem PHP-Programm aus der oben angegebenen Tabelle nur noch
Festplatten eines Herstellers an. Der Benutzer soll den gewünschten Hersteller
(Fujitsu, Quantum oder Seagate) in einem select-Menü auswählen. Die Daten sollen
in Form einer HTML-Tabelle mit einer Überschrift angezeigt werden. Das Formular
und die Ausgabe zur Beispielauswahl zeigen die folgenden Abbildungen.
*/
?>
<html>
<head>
    <title>Preisgruppe</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
    <label for="hersteller">Anzeigen der Festplatten des Herstellers:</label><br>
    <select name="hersteller">
    <option value="Seagate">Seagate</option>
    <option value="IBM Corporation">IBM</option>
    <option value="Quantum">Quantum</option>
    <option value="Fujitsu">Fuji</option>
    </select> 
    <input type="submit" value="Abschicken" />
    <input type ="reset"/>
    </form>
</body>
</html>
<?php
    if(isset($_POST['hersteller']) && $_SERVER['REQUEST_METHOD'] == "POST"){
        echo "Es wurden folgende Produkte gefunden:<br>";
        $con = mysqli_connect("","root", "");
        mysqli_select_db($con, "hardware");
        $sql = "select * from fp where ";
        $sql .= " hersteller='".$_POST["hersteller"]."'";
        $res = mysqli_query($con, $sql);
        $num = mysqli_num_rows($res);
        if ($num==0) echo "Keine passenden Produkte gefunden";
        echo "<table><th>Hersteller</th><th>Modell</th><th>Preis</th>";
        while ($dsatz = mysqli_fetch_assoc($res)) { 
            echo "<tr>";
            echo "<td>".$dsatz["hersteller"] . "</td>" .
                "<td>".$dsatz["typ"] . "</td>" .
                "<td>".$dsatz["preis"] . "</td>";
            echo "</tr>";
        }
        mysqli_close($con);
        echo "</table>";
    }
    else{
        echo "";
    }
?>