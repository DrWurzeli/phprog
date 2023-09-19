<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>changing bg</title>
    <style>
        body {
            background-color:
            <?php
                date_default_timezone_set("Europe/Berlin");
                $time = date("H");
                if ($time < 5  || $time > 20) echo "black";
                elseif ($time < 11) echo "lightblue";
                elseif ($time <15) echo "blue";
                elseif ($time <18) echo "yellow";
                else echo "orange";
            ?>;
        }
    </style>
</head>    
<body>
    <?php
        echo "moin";
    ?>
</body>
</html>