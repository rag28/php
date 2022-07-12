<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcion para calcular base * altura</title>
</head>
<body>
    <?php

    function calcular_area_rect($base, $altura){
        return $base*$altura;
    }    

     echo "El área es " . calcular_area_rect (100,0.60). "<br>";

    ?>

</body>
</html>