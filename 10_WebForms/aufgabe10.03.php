<html>
<head>
    <title>Forms</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
    Nettowert:<br>
    <input type="text" name="netto" size="20" maxlength="30"/>
    <br>
    USt-Satz:<br>
    <select name="ust">
        <option value="19">19%</option>
        <option value="7">7%</option>
    </select>
    <br>
    <input type="submit" value="Berechnen"/>
    </form>
</body>
</html>

<?php
    function brutto($netto, $mwstSatz){
        return $netto * (100 + $mwstSatz) / 100;
    }

    if(isset($_POST['netto']) && isset($_POST['ust']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
        if (empty($_POST['ust']) || empty($_POST['netto'])){
            echo "<p>Bitte etwas in die Felder eintragen.<br>";
        }
        else{
            $brutto = brutto($_POST['netto'], $_POST['ust']);
            echo htmlspecialchars($_POST['netto'])." ergibt ".htmlspecialchars($brutto)." inklusive ".htmlspecialchars($_POST['ust'])."% USt.<br>"; 
        }
    }
?>