<?php
//zufallsbilder.php

$texte = array("blumen", "boot", "landschaft", "stadt_am_meer", "strand");
$max = count($texte)-1;
$zufallszahl = rand(0, $max);
echo $texte[$zufallszahl];