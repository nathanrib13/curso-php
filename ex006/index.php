<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <?php 
    $valor = $_GET['name']; 
    $sexo = $_GET['sexo'];

  
    ?>
    </section>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <input type="text" placeholder="sei nome" name="name" value="<?=$valor?>">
            <input type="text" placeholder="sei sexo" name="sexo" value="<?=$sexo?>">
            <button type="submit">Enviar</button>
        </form>
    </main>
    <?php   echo "ola $valor do sexo $sexo"?>

</body>

</html>