<?php

echo "Ihre Eingaben<br>";
echo "Vorname: ".htmlspecialchars($_GET['vorname'])."<br>";
echo "Name: ".htmlspecialchars($_GET['nachname'])."<br>";
echo "E-Mail: ".htmlspecialchars($_GET['email'])."<br>";
echo "Telefon: ".htmlspecialchars($_GET['phone'])."<br>";