<html>
<head>
    <title>Files</title>
</head>
<body>
<?php
   if(file_exists("u_lesen.txt")) {
        $file = @fopen("u_lesen.txt", "r");
        if ($file){
            echo "<table>";
            echo "<th>Nummer</th><th>Nachname</th><th>Vorname</th>";
            $i = 1;
            while (!feof($file)){
                $line = fgets($file);
                echo "<tr>";
                echo "<td>$i</td><td>$line</td>";
                if (!feof($file)) {
                    $line = fgets($file);
                    echo "<td>$line</td>";
                }
                echo "</tr>";
                $i++;
            }
            echo "</table>";
            fclose($file);
        }
        else "Datei konnte nicht geöffnet werden.";
   }
   else echo "Keine Datei gefunden.";
?>
</body>
</html>