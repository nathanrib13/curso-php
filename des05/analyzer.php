<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    $number = $_GET["number"];  
    $intNumber = floor($number);
    $floatNumber = fmod($number, 1.0);
    echo " o numero enviado $number, tem como parte inteira: $intNumber e como parte decimal: $floatNumber";
    ?>
</body>

</html>