<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Ejemplo Matriz</title>
    
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aSueldo=array();
$aSueldo[]=array(
"dni" => 24700179,
"nombre" => "garay raúl",
"sbruto" => 10000,
"sneto" => 0
);

$aSueldo[]=array(
"dni" => 12365478,
"nombre" => "Rosales andrada",
"sbruto" => 90000.95,
"sneto" => 0
);
$aSueldo[]=array(
"dni" => 36258741,
"nombre" => "Gutierrez Maria",
"sbruto" => 100000,
"sneto" => 0
);
$aSueldo[]=array(
"dni" => 33125452,
"nombre" => "Sajama Pedro",
"sbruto" => 120000,
"sneto" => 0
);
?>

<?php
    function calcular_Neto($bruto){
    return $bruto-($bruto*0.17);
   }
?>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-1 bg-primary text-white">
                <h1>Listado de Empleados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead >
                        <tr>
                            <th>Dni</th>
                            <th>Nombre y Apellido</th>
                            <th>Sueldo Bruto</th>
                            <th>Desc. Ley</th>
                            <th>Sueldo Neto</th>
                            <th>Neto c/Formato</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $contador=0;
                            $sbruto=0;
                            foreach($aSueldo as $sempleado){
                        ?>

                        <tr>
                            <td><?php echo $sempleado["dni"];?></td>
                            <td><?php echo mb_strtoupper($sempleado["nombre"]);?></td>
                            <td><?php echo $sempleado["sbruto"];?></td>
                            <td>Desc. 17%</td>
                            <td><?php echo calcular_neto($sempleado["sbruto"]);?></td> 
                            <td><?php echo number_format(calcular_Neto($sempleado["sbruto"]),2);?></td>                     
                        </tr>
                        <?php
                            }
                        ?>
                            
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h5>Cantidad de Empleados activos <?php echo count($sempleado)?> </h5>
            </div>                                
        </div>


                          
    </div>    
</body>
</html>

