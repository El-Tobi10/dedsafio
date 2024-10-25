<?php include "include/header.php"?>  
<?php session_start();
if(isset($_SESSION['mensaje'])){
    echo '<script>
            Swal.fire({
                title: "' . $_SESSION['mensaje'] . '",
                icon: "success",
                confirmButtonText: "Aceptar",
                confirmButtonColor: "#038dac",
                allowOutsideClick: false
            });
          </script>';
    unset($_SESSION['mensaje']); // Limpiar el mensaje después de mostrarlo
}?>  
    <main>
        <div class="col">
            <form action="val_nombre.php" method="post" enctype="multipart/form-data">
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

        <table class="table">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th colspan="3">Operaciones</th>
          </tr> 
        </thead>

        <tbody>
            <?php
            $query = "SELECT * FROM personas";
            $resultado = mysqli_query($con,$query);

            while($row = mysqli_fetch_array($resultado)){?>

                <tr>
                <td><?php echo $row['nombre'];?></td>
                <td><?php echo $row['apellido'];?></td>
                
                <td><a class="btn btn-warning" href="modificar.php?id=<?php echo $row['id_persona'];?>">Modificar</a></td>
                <td><a class="btn btn-danger" href="eliminar.php?id=<?php echo $row['id_persona'];?>">Eliminar</a></td>
                <td><a class="btn" href="imagen.php?id=<?php echo $row['id_persona'];?>">Imagenes</a></td>
                </tr>

            <?php } ?>
        </tbody>
      </table>
    </main>
<?php include "include/footer.php"?>