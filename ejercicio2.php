<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio break</title>
</head>
<body>
    <?php
        for ($i = 2; $i <= 100; $i +=2) {
            echo $i . "<br>";
            if($i==60) {
	            break;
	        }
        }
        
    ?>    
</body>
</html>
