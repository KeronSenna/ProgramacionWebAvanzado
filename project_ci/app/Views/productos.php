<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Productos</title>
</head>

<body>
    <h1 class="titulo">Productos de Tech Store</h1>
    <table class="tabla">
        <thead>
            <th>Producto</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Info</th>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto) : ?>
                <tr>
                    <td> <?= $producto['Nombre'] ?> </td>
                    <td> <?= $producto['Tipo_de_producto'] ?> </td>
                    <td> <?= $producto['Precio_base'] ?> </td>
                    <td><a href="<?= site_url('verDetalle/' . $producto['id']) ?>">Ver Detalles</a></td>
                </tr>
        </tbody>
    <?php endforeach; ?>
    </table>
</body>

</html>