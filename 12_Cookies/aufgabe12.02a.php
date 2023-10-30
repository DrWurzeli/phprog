<!DOCTYPE html>
<html>
<head>
    <title>Cookie</title>
</head>
<body>
<form action="aufgabe12.02b.php" method="POST">
<h2>Ihr Name</h2>
<input type="text" name="nachname" size="20" maxlength="30" value="
<?php
if (isset($_COOKIE["nachname"])){
    echo htmlspecialchars($_COOKIE["nachname"]);
 }
?>" />
Nachname
<br><br>
<input type="text" name="vorname" size="20" maxlength="30" value="
<?php
if (isset($_COOKIE["vorname"])){
    echo htmlspecialchars($_COOKIE["vorname"]);
 }
?>"/>
Vorname
<br><br>
<input type="submit" value="Bestellen" />
</form>
</body>
</html>