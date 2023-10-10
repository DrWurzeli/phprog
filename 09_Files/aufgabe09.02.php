<?php
    //check for file + initilize counter
$people = 0;
$over1k = 0;
$under1k = 0;
   if(file_exists("u_schreiben.txt")) {
        //open files
        $file = fopen("u_schreiben.txt", "r");
        $fileb = fopen("u_schreiben_b.txt", "w");
        $filea = fopen("u_schreiben_a.txt", "w");
        //did files open?
        if ($file && $filea && $fileb){
            //is file empty?
            while (!feof($file)) {
                //get identifier and write content
                $people++;
                $id = fgets($file);
                if ($id >= 1000){
                    $over1k++;
                    fputs($fileb, $id.fgets($file).fgets($file)); 
                }
                else{
                    $under1k++;
                    fputs($filea, $id.fgets($file).fgets($file));
                }
            }
            //out and close file streams
            echo "Es wurden $people Datensaetze gefunden.<br>";
            echo "Davon wurden $under1k in die Datei u_schreiben_a.txt geschrieben<br>";
            echo "und $over1k in die Datei u_schreiben_a geschrieben.<br>";
            fclose($file);
            fclose($filea);
            fclose($fileb);
        }
        else "Datei konnte nicht geöffnet werden.";
   }
   else echo "Keine Datei gefunden.";