<?php

if(isset($_POST["name"]) && !empty($_POST["name"])
&& !isset($_COOKIE["name"])){
    setcookie("name", $_POST["name"], time()+30);
    echo "Hallo ".htmlspecialchars($_COOKIE["name"]).".";
}
else if (isset($_COOKIE["name"])){
    echo "Hallo ".htmlspecialchars($_COOKIE["name"]).".";
}
else{
    echo "Hallo Unbekannter.";
}
?>
<br>
<a href="aufgabe12.01.php">go back</a>