<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>exemplo de pho</h1>

    <?php
        date_default_timezone_set("America/Sao_Paulo");
        echo "hoje é dia:" . date("d/m/Y");
        echo "e sao:" . date("G:i:s T")
    ?>

</body>

</html>