<?php 
	include "conexion.php";
	if(isset($_POST['agregar'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
    
        if($nombre!=null && $apellido!=null){
            $sql = "INSERT INTO personas(nombre, apellido)VALUES('$nombre','$apellido')";
            mysqli_query($con,$sql);
            $_SESSION['mensaje'] = "Cargada con éxito";
            header("Location:index.php");
        }
    }else {
        echo '<script>
        Swal.fire({
            title: "No se pueden dejar campos vacios.",
            icon: "error",
            confirmButtonText: "Aceptar",
            confirmButtonColor: "#038dac",
            allowOutsideClick: false
            });
            </script>';
        }
    
    ?>

