<?php
    //check for file
$people = 0;
$over1k = 0;
$under1k = 0;
   if(file_exists("u_schreiben.txt")) {
        //open file
        $file = @fopen("u_schreiben.txt", "r");
        //did file open?
        if ($file){
            //is file empty?
            while (!feof($file)) {
                //get identifier
                $people++;
                $id = fgets($file);
                if ($id >= 1000){
                    $over1k++;
                    $fileb = fopen("u_schreiben_b.txt", "w");
                    if($fileb){
                        fputs($fileb, fgets($file).fgets($file));
                        fclose($fileb);
                    }
                }
                else{
                    $under1k++;
                    $filea = fopen("u_schreiben_a.txt", "w");
                    if($filea){
                        fputs($filea, fgets($file).fgets($file));
                        fclose($filea);
                    }
                }
            }
            echo "Es wurden $people Datensaetze gefunden.<br>";
            echo "Davon wurden $under1k in die Datei u_schreiben_a.txt geschrieben<br>";
            echo "und $over1k in die Datei u_schreiben_a geschrieben.<br>";
            fclose($file);
        }
        else "Datei konnte nicht geöffnet werden.";
   }
   else echo "Keine Datei gefunden.";