<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Aufgabe 5.1</title>
    </head>
    <body>
        <?php
            $preise = array(22.5, 12.30, 5.20);
            $nettosumme = 0;
            $ust = 1.19;
            $bruttosumme = 0;
            
            for($i=0; $i<count($preise); $i++){
                $nettosumme += $preise[$i];
                echo "Artikel ".($i+1).": ".$preise[$i]." Euro"."<br>";
                $bruttosumme += $preise[$i]*$ust;
            }
            echo "<br>";
            echo "Nettosumme: ".$nettosumme." Euro <br>";
            echo "Umsatzsteuer: ".substr($ust, 2)." %<br>";
            echo "Bruttosumme: ".$bruttosumme." Euro <br>";
        ?>
    </body>
</html>