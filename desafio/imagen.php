
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="col">
    <h2>Seleccione o arrastre su imagen aqui:</h2>
    <form action="val_imagen.php" class="dropzone" id="my-great-drpozone" enctype="multipart/form-data" name="file">
        <div class="fallback">
            <input type="file" name="file" multiple REQUIRED>
        </div>
        <br>
    </form>
    <button type="submit" name="agregar" class="btn btn-primary">Aceptar</button>
</div>
</body>
</html>
