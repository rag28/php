<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Ejercicio Clinica Foreach</title>
    
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.5,
);

$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre" => "Gonzalo Bustamante",
    "edad" => 66,
    "peso" => 79,
);

$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre" => "Juan Irraola",
    "edad" => 28,
    "peso" => 79,
);

$aPacientes[] = array(
    "dni" => "21.684.385",
    "nombre" => "Beatriz Ocampo",
    "edad" => 50,
    "peso" => 79,
);

//print_r($aProductos);

?>


</head>
<body>
    <div class="container">
           <div class="row">
            <div class="col-12 text-center py-1 bg-primary text-white">
                <h1>Listado de Pacientes</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Dni</th>
                            <th>Nombre y apellido</th>
                            <th>Edad</th>
                            <th>Peso</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
        
                        <?php foreach ($aPacientes as $pacientes){?>
                            <tr>
                                <td><?php echo $pacientes["dni"];?></td>
                                <td><?php echo $pacientes["nombre"];?></td>
                                <td><?php echo $pacientes["edad"];?></td>
                                <td><?php echo $pacientes["peso"];?></td>

                                <td><button class="btn btn-primary">Editar</button></td>
                                <td><button class="btn btn-primary">Eliminar</button></td>             
                            </tr>
                        <?php
                        } 
                        ?>

                    </tbody>

                </table>
            </div>
        </div>    
    </div>    
</body>
</html>