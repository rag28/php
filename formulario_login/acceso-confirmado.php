<?php
    If (isset($_POST["txtusuario"])){
        $usuario = $_POST["txtusuario"];
        $password = $_POST["txtpassword"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Menu principal</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Bienvenid@ al sistema</h1>
            </div>
            <div class="alert alert-primary" role="alert">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid quidem quaerat nisi rerum laudantium magnam iste? Provident quibusdam cupiditate minus, iusto necessitatibus quaerat eum similique magni deserunt, molestias corporis! Aperiam!</p>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary btn-lg" onclick="location.href='index.php'">Salir</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>