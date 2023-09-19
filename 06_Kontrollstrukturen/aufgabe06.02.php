<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>1x1</title>
</head>    
<body>
    <table>
    <table border="1">
    <?php
    for($i = 1; $i<11; $i++){
        echo "<tr>";
        for($j=1; $j<11; $j++){
            echo "<td>".$i*$j;
        };
    };
    ?>
    </table>
</body>
</html>