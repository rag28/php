<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Ficha Personal</title>
    
    <?php
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $apeynom="Raul Armando";
    $edad=30;
    $pelicula="master";
    $apeliculas= array("Maldonado", "El Guerrero", "El Diego");
    ?>

</head>
<body>
    <div class="container">
           <div class="row">
            <div class="col-12 text-center py-1 bg-primary text-white">
                <h1>Ficha de Personal</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <td><?php echo date("d/m/Y"); ?></td>
                        </tr>
                        <tr>
                            <th>Apellido y Nombre</th>
                            <td><?php echo $apeynom; ?></td>
                        </tr>
                        <tr>
                            <th>Edad</th>
                             <td><?php echo $edad; ?></td>
                        </tr>
                        <tr>
                            <th>Pelicula Favorita</th>
                            <td><?php echo $apeliculas[0]; ?><br>
                        	<?php echo $apeliculas[1]; ?><br>
                            <?php echo $apeliculas[2]; ?><br>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>    
    </div>    
</body>
</html>