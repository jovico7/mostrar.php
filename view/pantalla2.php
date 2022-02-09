<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recogida de datos</title>
</head>
<body>
    <?php
    //recupero la sesión
    session_start();
    if (!($_SESSION["pantalla2"]=='check')) {
        header("Location: ../index.php");
    }
    ?>
<h1>Lo has adivinado!!</h1>
<a href="../index.php">Volver a jugar</a>
</body>
</html>