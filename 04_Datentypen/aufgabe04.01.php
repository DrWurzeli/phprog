<?php
//zufallsbilder.php

$bilder = array("blumen", "boot", "landschaft", "stadt_am_meer", "strand");
$max = count($bilder)-1;
$zufallszahl = rand(0, $max);
echo $bilder[$zufallszahl];