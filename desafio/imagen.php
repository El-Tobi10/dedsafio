<?php include "include/header.php"?>

    <h2>Seleccione o arrastre su imagen aqui:</h2>
    <form action="val_imagen.php" method="post" class="dropzone" enctype="multipart/form-data" name="file">
        <div class="fallback">
            <input type="file" name="file" multiple REQUIRED>
        </div>
        <br>
        <button type="submit" name="agregar" class="btn btn-primary">Aceptar</button>
    </form>
    <table class="table">
        <thead>
          <tr>
            <th>Imagen</th>
          </tr> 
        </thead>

        <tbody>
            <?php
            $query = "SELECT * FROM imagenes";
            $resultado = mysqli_query($con,$query);

            while($row = mysqli_fetch_array($resultado)){?>

                <tr>
                <td><?php echo "<img height='70px' width='60px' src='fotos/".$row['imagen']."'>";?></td>
                </tr>

            <?php } ?>
        </tbody>
      </table>

    <?php include "include/footer.php"?>
