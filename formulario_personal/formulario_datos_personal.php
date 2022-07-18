<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Datos Personal</title>
</head>
<body>

    <div class="container">

        <div class="row justify-content-center align-items-center">
            <div class="col-6 my-4 p-4 bg-warning text-dark shadow-lg">
                <form action="resultados.php" method="POST">
                    <div class="card shadow-lg p-3 mb-2 bg-primary text-white">Ingrese Datos</div>
                    <div class="my-3">
                        <label for="txtcuit" class="form-label">Nombre</label>
                        <input type="text" name="txt_nombre" class="form-control" id="txtnombre" placeholder="ingrese Nombre" require>
                    </div>
                    <div class="my-3">
                        <label for="txtdni" class="form-label">Dni</label>
                        <input type="text" name="txt_dni" class="form-control" id="txtdni" placeholder="Ingrese DNI" requiered>
                    </div>
                    <div class="my-3">
                        <label for="txttelefono" class="form-label">Teléfono</label>
                        <input type="text" name="txt_telefono" class="form-control" id="txttelefono" placeholder="Ingrese Telefono" requered>
                    </div>
                    <div class="my-3">
                        <label for="txtedad" class="form-label">Edad</label>
                        <input type="number" name="txt_edad" class="form-control" id="txtedad" placeholder="Ingrese Edad" requered>
                    </div>

                    <div class="my-3 text-center">
                        <button class="btn btn-dark" name="submit" >Aceptar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>