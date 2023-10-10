<html>
<head>
    <title>Forms</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
Nettowert: <br />
<input type="text" name="netto" size="20" maxlength="30" />
<br />
USt-Satz:<br>
<select name="ust">
    <option value="19">19%</option>
    <option value="7">7%</option>
</select>
<br>
<input type="submit" value="Berechnen" />
</form>
</body>
</html>

<?php
$betrag = -1;
$ust = -1;
$brutto = 0;

function brutto($netto, $mwstSatz){
    return $netto * (100 + $mwstSatz) / 100;
}
if(isset($POST_['netto']) && !empty($POST_['netto'])){
    $betrag = $POST_['netto'];
    echo $betrag;
}

if(isset($POST_['ust']) && !empty($POST_['ust'])){
    $ust = $POST_['ust'];
    echo $ust;
}

if ($betrag <> -1 && $ust <> -1){
    $brutto = brutto($betrag, $ust);
    echo "$betrag ergibt $brutto inklusive USt.<br>";
}