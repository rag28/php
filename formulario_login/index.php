<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="estilo.css">

    <title>inicio de sesion</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 my-4 text-center text-white">
                <h1>Sistema Personal</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div id="id-sombras" class="col-md-6 col-ms-12 my-4 p-4 bg-warning text-dark">
                <h3 class="text-center text-dark">Clave de acceso</h3>
                <form action=" " method ="POST">
                    <div class="my-3">
                        <label for="txt_usuario" class="control-label">Usuario</label>
                        <input type="text" name="txtusuario" class="form-control" id="txt_usuario" placeholder="Ingrese usuario" require>
                    </div>
                    <div class="my-3">
                        <label for="txt_password" class="form-label">Clave</label>
                        <input type="password" name="txtpassword" class="form-control" id="txt_password" placeholder="ingrese password" require>
                    </div>
                    <div class="d-grid text-center">
                        <button class="btn btn-dark btn-block btn-lg" name="submit">Aceptar</button>
                    </div>                    
                </form>

                <?php
                    $nombre = " ";
                    $password = " ";

                    If (isset($_POST["txtusuario"])){
                        $nombre = $_POST["txtusuario"];
                        $password = $_POST["txtpassword"];
                        If (($nombre=="") || ($password =="")) { ?>
                            
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Válido para usuario registrado!</strong> por favor ingrese nombre de usuario y contraseña.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php
                            
                            } Else {
                                $nombre = "Invitado";
                                header("Location: acceso-confirmado.php");
                            }
                    }
                    ?>        
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>