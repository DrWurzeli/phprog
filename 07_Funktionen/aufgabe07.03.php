<html>
<head>
    <title>Array_R</title>
</head>
<body>
<?php
    function arrayOut($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }

    $test = array(1,2,3,4,5);
    arrayOut($test);
?>
</body>
</html>