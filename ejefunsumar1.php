<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcion para sumar</title>
</head>
<body>
    <?php

    function numeros_impares($stope){
        for ($i=0; $i < $stope; $i++) {
            if($i % 2 > 0){
                echo "numeros: $i";
                echo "<br>";
            }
        }
    }    

    numeros_impares(30);

    ?>

</body>
</html>