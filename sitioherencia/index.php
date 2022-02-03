<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Actividad. Herencia</h1>";
        require_once('./Animal/Perro.php');
        require_once('./Animal/Gato.php');
        require_once('./Animal/Animal.php');
        $perro=new Perro();
        $gato=new Gato();

        $perro->comer();
        $perro->dormir1();

        $gato->comer();
        $gato->dormir1();


    ?>
</body>
</html>