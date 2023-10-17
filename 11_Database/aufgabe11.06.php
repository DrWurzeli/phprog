<?php
/*
Ermöglichen Sie mithilfe eines PHP-Programms das Ändern von Datensätzen in der
Tabelle fp der Datenbank hardware.
- I'm sorry.
*/
?>
<html>
<head>
    <title>Edit database entries</title>
</head>
<body>
<?php
function selectall(){
    $con = mysqli_connect("", "root", "");
    if ($con) {
        mysqli_select_db($con, "hardware");
        $sql = "SELECT * from fp";
        $res = mysqli_query($con, $sql);
        mysqli_close($con);
        return $res;
    }
    else return "error";
}

if (empty($_POST)) {
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
    <input type="submit" value="Daten anzeigen" name="send" />
    </form>
     <?php
} else if (isset($_POST['send']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <input type="submit" value="Neuladen" name="send" />
    <?php
    echo "<table border=1>";
    echo "<th>Corp</th><th>Typ</th><th>GB</th><th>Price</th><th>ID</th><th>Date</th>";
    $res = selectall();
    if($res <> "error"){
        while ($ans = mysqli_fetch_assoc(($res))) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($ans['hersteller']) . "</td>";
            echo "<td>" . htmlspecialchars($ans['typ']) . "</td>";
            echo "<td>" . htmlspecialchars($ans['gb']) . "</td>";
            echo "<td>" . htmlspecialchars($ans['preis']) . "</td>";
            echo "<td>" . htmlspecialchars($ans['artnummer']) . "</td>";
            echo "<td>" . htmlspecialchars($ans['prod']) . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    echo "<input type='submit' value='Daten bearbeiten' name='select'/>";
    echo "<input type='submit' value='Abbrechen' name='cancel'/>";
    echo "</form>";
}
else if (isset($_POST['select']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <input type="submit" value="Neuladen" name="send" />
    <?php
    echo "<table border=1>";
    echo "<th>Corp</th><th>Typ</th><th>GB</th><th>Price</th><th>ID</th><th>Date</th><th>edit</th>";
    $res = selectall();
    if($res <> "error"){
        while ($ans = mysqli_fetch_assoc(($res))) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($ans['hersteller']) . "</td>";
            echo "<td>" . htmlspecialchars($ans['typ']) . "</td>";
            echo "<td>" . htmlspecialchars($ans['gb']) . "</td>";
            echo "<td>" . htmlspecialchars($ans['preis']) . "</td>";
            echo "<td>" . htmlspecialchars($ans['artnummer']) . "</td>";
            echo "<td>" . htmlspecialchars($ans['prod']) . "</td>";
            echo "<td> <input type='checkbox' name='toedit[]' value='" . htmlspecialchars($ans['artnummer']) ."' /></td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    echo "<input type='submit' value='Datensatz bearbeiten' name='edit'/>";
    echo "<input type='submit' value='Abbrechen' name='cancel'/>";
    echo "</form>";
}
else if (isset($_POST['edit']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    if(!empty($_POST['toedit']) && is_array($_POST['toedit'])){
        $con = mysqli_connect("", "root", "");
        mysqli_select_db($con, "hardware");
        $ids = $_POST['toedit'];
        echo "<form action='".htmlspecialchars($_SERVER["PHP_SELF"])."' method='POST'>";
        for($x=0; $x<count($ids); $x++){
            $sql = "SELECT * FROM fp WHERE artnummer = '".htmlspecialchars($ids[$x])."'";
            $res = mysqli_query($con, $sql);
            $ans = mysqli_fetch_assoc(($res));
            echo "Datensatz ".$x.":<br>";
            echo "<input name='hersteller".$x."' value='". htmlspecialchars($ans['hersteller']) ."'/>Hersteller<br>";
            echo "<input name='typ".$x."' value='". htmlspecialchars($ans['typ']) ."'/>Typ<br>";
            echo "<input name='gb".$x."' value='". htmlspecialchars($ans['gb']) ."'/>GB<br>";
            echo "<input name='preis".$x."' value='". htmlspecialchars($ans['preis']) ."'/>Preis<br>";
            echo "<input name='artnummer".$x."' value='". htmlspecialchars($ans['artnummer']) ."'/>ArtNummer<br>";
            echo "<input name='prod".$x."' value='". htmlspecialchars($ans['prod']) ."'/>Datum<br>";
            echo "<input type='hidden' name='id".$x."' value='". htmlspecialchars($ans['artnummer']) ."' />";
            if(count($ids)>1) echo "<br>";
        }
        mysqli_close($con);
        echo "<input type='submit' value='Update' name='update'/>";
        echo "<input type='submit' value='Abbrechen' name='cancel'/>";
        echo "</form>";
    }
    else{
        echo "<form action=".htmlspecialchars($_SERVER["PHP_SELF"])." method='POST'>";
        echo "<input type='submit' value='Zum Start' name='cancel'/>";
        echo "</form>";
        echo "Nothing selected. Nothing happened.";
    }
}
else if (isset($_POST['update']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    $ans = 0;
    $con = mysqli_connect("", "root", "");
    mysqli_select_db($con, "hardware");
    for($x=0; $x<(int)(count($_POST)/7); $x++){
        $sql = "UPDATE fp SET";
        $sql .= " hersteller='".htmlspecialchars($_POST['hersteller'.$x])."',";
        $sql .= " typ='".htmlspecialchars($_POST['typ'.$x])."',";
        $sql .= " gb='".htmlspecialchars($_POST['gb'.$x])."',";
        $sql .= " preis='".htmlspecialchars($_POST['preis'.$x])."',";
        $sql .= " artnummer='".htmlspecialchars($_POST['artnummer'.$x])."',";
        $sql .= " prod='".htmlspecialchars($_POST['prod'.$x])."'";
        $sql .= " WHERE artnummer='".htmlspecialchars($_POST['id'.$x])."'";
        $res = mysqli_query($con, $sql);
        //echo "$sql<br>";
        $ans += mysqli_affected_rows($con);
    }
    mysqli_close($con);
    echo "<form action=".htmlspecialchars($_SERVER["PHP_SELF"])." method='POST'>";
    echo "<input type='submit' value='Neue Daten anzeigen' name='send'/>";
    echo "</form>";
    if ($ans == 1){
        echo htmlspecialchars($ans)." Datensatz bearbeitet.";
    }
    else echo htmlspecialchars($ans)." Datensätze bearbeitet.";
}
else if (isset($_POST['cancel']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    header("Location: ".htmlspecialchars($_SERVER["PHP_SELF"]));
}
?>
</body>
</html>