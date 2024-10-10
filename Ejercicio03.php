<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página PHP</title>
</head>
<body>
    <?php
    // Incluir el archivo que contiene la variable
    include 'titulo.php';
    ?>

    <!-- Mostrar el título en la página -->
    <h1><?php echo $titulo; ?></h1>
</body>
</html>
