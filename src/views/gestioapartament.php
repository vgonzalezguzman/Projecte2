<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Apartamentos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Listado de s</h1>
        <div class="apartamentos">
            <h1>s</h1>
            <?php foreach ($apartaments as $value): ?>
                <div class="apartamento">
                    <h1>hoa</h1>
                    <h2><?php echo $value['title']; ?></h2>
                    <p><strong>Código Postal:</strong> <?php echo $value['Titol']; ?></p>
                    <p><strong>Descripción:</strong> <?php echo $value['descripcion']; ?></p>
                    <p><strong>Metros Cuadrados:</strong> <?php echo $value['metros']; ?></p>
                    <p><strong>Número de Habitaciones:</strong> <?php echo $value['habitaciones']; ?></p>
                    <p><strong>Precio Temporada Baja:</strong> <?php echo $value['TBaja']; ?></p>
                    <p><strong>Precio Temporada Alta:</strong> <?php echo $value['TALT']; ?></p>
                    <p><strong>Días de Cancelación:</strong> <?php echo $value['cancelacion']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
