<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcion para calcular sueldo bruto</title>
</head>
<body>
    <?php

    function calcular_neto_bruto($bruto){
        return $bruto-($bruto*0.17);
    }    

     echo "El neto a cobrar " . calcular_neto_bruto (80000). "<br>";

    ?>

</body>
</html>
