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
        $valor= rand(1,5);
        if (($valor==1) || ($valor==3) || ($valor==5)){
            echo "El número $valor es IMPAR";
        }else{
            echo "El número $valor es PAR";
        }
    ?>    
</body>
</html>


