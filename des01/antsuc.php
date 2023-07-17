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
        $antecessor = $number - 1;
        $sucessor = $number + 1;

        echo "o antecessor de $number é $antecessor e o sucessor é $sucessor"
    ?>
</body>

</html>