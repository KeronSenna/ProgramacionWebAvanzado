<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estdetalle.css">
    <link rel="stylesheet" href="<?= base_url('css/estdetalle.css'); ?>">
    <title>Detalles del Producto</title>
</head>

<body>
    <h1 class="titulo">Detalles del Producto</h1>
    <p><strong>Nombre:</strong> <?= $producto['Nombre'] ?></p>
    <p><strong>Tipo:</strong> <?= $producto['Tipo_de_producto'] ?></p>
    <p><strong>Precio:</strong> <?= $producto['Precio_base'] ?></p>
    <p><strong>Descripción:</strong> <?= $producto['Detalles'] ?></p>

    <a href="<?= site_url('productos') ?>">Volver a la lista de productos</a>
</body>

</html>