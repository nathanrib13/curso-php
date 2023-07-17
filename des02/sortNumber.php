<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    $min = $_GET["min"];
    $max = $_GET["max"];
    $randonNumber = rand($min, $max);
    echo $randonNumber
    ?>
</body>

</html>s