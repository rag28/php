<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Ejercicio Maximo</title>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$aNotas =array(8,4,5,3,9,1);
$aSueldo = array(800.30, 400.87,500.45,300,900.70,100,900,1800);

function maximo($aVector) {
    $vmaximo = 0;
	foreach ($aVector as $valor){
        if ($vmaximo < $valor){
            $vmaximo = $valor;
        }
    }
    return $vmaximo;
}

echo "La nota maxima es: ". maximo($aNotas)."<br>";
echo "El sueldo maximo es: ". maximo($aSueldo);

?>
