<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo</title>
</head>
<body>
    <h2>Subir Archivo</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo" required>
        <button type="submit" name="submit">Subir Archivo</button>
    </form>
</body>
</html>