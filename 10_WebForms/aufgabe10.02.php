<?php

if(!(isset($_POST['vorname']) && isset($_POST['nachname'])
&& isset($_POST['email']) && isset($_POST['phone']))){
?>
<html>
<head>
    <title>Forms</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
    Ihr Vorname: <br />
    <input type="text" name="vorname" size="20" maxlength="30" />
    <br />
    Ihr Nachname: <br />
    <input type="text" name="nachname" size="20" maxlength="30" />
    <br />
    Ihre E-Mail Adresse: <br />
    <input type="text" name="email" size="20" maxlength="30" />
    <br />
    Ihre Telefonnummer: <br />
    <input type="text" name="phone" size="20" maxlength="30" />
    <br />
    <input type="submit" value="Abschicken" />
    </form>
</body>
</html>
<?php
} else {
    echo "Ihre Eingaben<br>";
    echo "Vorname: ".htmlspecialchars($_POST['vorname'])."<br>";
    echo "Name: ".htmlspecialchars($_POST['nachname'])."<br>";
    echo "E-Mail: ".htmlspecialchars($_POST['email'])."<br>";
    echo "Telefon: ".htmlspecialchars($_POST['phone'])."<br>";
}
?>
