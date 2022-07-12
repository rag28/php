<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcion para calcular sueldo bruto</title>
</head>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<body>
    <?php

    function contar ($aArray) {
        $contador = 0;
	    foreach($aArray as $item){
	        $contador++;
        }
	    return $contador;
    }
   
    $aNotas =array(9,8,9.50,4,7,8);

    ?>

</body>
</html>
