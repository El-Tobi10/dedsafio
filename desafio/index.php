<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">

    </nav>
    <main>
        <form id="upload-form" class="dropzone">
            <!-- this is were the previews should be shown. -->
            <div class="previews"></div>

            <!-- Now setup your input fields -->
            <input type="email" name="username" />
            <input type="password" name="password" />

            <button type="submit">Submit data and files!</button>
        </form>
        <div class="col">
            <form action="val_nombre.php" method="post">
                <div class="form-floating mb-3">
                    <input type="text" name="nombre" class="form-control" id="floatingInput" placeholder="Nombre"
                        REQUIRED>
                    <label for="floatingInput">Nombre</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="apellido" class="form-control" id="floatingPassword" placeholder="Apellido"
                        REQUIRED>
                    <label for="floatingPassword">Apellido</label>
                </div>
                <button type="submit" name="agregar" class="btn btn-primary">Aceptar</button>
                <button type="reset" class="btn btn-secondary">Cancelar</button>
            </form>
        </div>
        

        <table>
            
        </table>
    </main>
    <footer>
        <p>Copyright @ Gaby-Tobi. Gracias por visitarnos</p>
    </footer>




    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

</body>

</html>