<?php

$file1 = "test.jpg";
$file2 = "test.jpeg";
$file3 = "test.xml";

function testFile($file, $muster = "/jpe?g$/"){
    if(preg_match($muster, $file)){
        echo "file ".$file." accepted";
        echo "<br>";
    }
    else echo "file ".$file." not accepted <br>";
}

testFile($file1);
testFile($file2);
testFile($file3);