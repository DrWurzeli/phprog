<html>
<head>
    <title>Preisgruppe</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
    Preisgruppe Produkt:
    <br>
    <input type="radio" name="preisgrp" value="1"/>
    bis 120 EUR einschließlich.<br>
    <input type="radio" name="preisgrp" value="2"/>
    ab 120 EUR und bis 140 EUR einschließlich.<br>
    <input type="radio" name="preisgrp" value="3"/>
    ab 140 EUR ausschließlich.<br>
    <input type="checkbox" name="sorting" value="" />
    Nach Preis (absteigend) sortieren.<br>
    <input type="submit" value="Abschicken" />
    <input type="reset"/>
    </form>
</body>
</html>
<?php
    if(isset($_POST['preisgrp']) && $_SERVER['REQUEST_METHOD'] == "POST"){
        echo "Es wurden folgende Produkte gefunden:<br>";
        $con = mysqli_connect("","root", "");
        mysqli_select_db($con, "hardware");
        $sql = "select hersteller, typ, preis from fp where ";
        switch($_POST["preisgrp"]) {
        case 1:
            $sql .= "preis <= 120";
        break;
        case 2:
            $sql .= "preis > 120 AND preis <= 140";
        break;
        case 3:
            $sql .= "preis > 140";
        break;
        }
        if(isset($_POST['sorting'])){
            $sql .= " order by preis DESC";
        }
        $res = mysqli_query($con, $sql);
        $num = mysqli_num_rows($res);
        if ($num==0) echo "Keine passenden Produkte gefunden";
        while ($dsatz = mysqli_fetch_assoc($res))
            echo $dsatz["hersteller"] . ", " .
            $dsatz["typ"] . ", " .
            $dsatz["preis"] . "<br />";
        mysqli_close($con);
    }
    else{
        echo "";
    }
?>