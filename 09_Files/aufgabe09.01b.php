<html>
<head>
    <title>Files</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?php
   if(file_exists("u_lesen.txt")) {
        $arr = file("u_lesen.txt");
        $size = count($arr);
        $x = 1;
        if ($size <> 0){
            echo "<table><th>Nummer</th><th>Nachname</th><th>Vorname</th>";
            for($i=0; $i<=$size/2+1; $i+=2){
                printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $x++, $arr[$i], $arr[$i+1]);
            }
            echo "</table>";

            for($t=0; $t<10; $t+=2){
                echo "test";
            }
        }
        else "Datei ist leer.";
   }
   else echo "Keine Datei gefunden.";
?>
</body>
</html>