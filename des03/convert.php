<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    $dolar = 4.80;
    $real = $_GET["real"];
    $total =  round($real/ $dolar, 2);
    
    echo "o valor de R$$real reais em dolár é de U$$total dolares"
    
    ?>
</body>

</html>