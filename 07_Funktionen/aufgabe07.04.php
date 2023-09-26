<?php

$file1 = "test.jpg";
$file2 = "test.jpeg";
$file3 = "test.xml";

$muster = "/jpe?g$/";

function testFile($file, $muster){
    if(preg_match($muster, $file)){
        echo "file ".$file." accepted";
        echo "<br>";
    }
    else echo "file ".$file." not accepted <br>";
}

testFile($file1, $muster);
testFile($file2, $muster);
testFile($file3, $muster);