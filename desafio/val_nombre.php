<?php 
	include "conexion.php";
	if(isset($_POST['agregar'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        
        if (isset($_FILES['file'])) {
            $foto = $_FILES['file'];
            print_r($_FILES['file']);
            $img_loc = $_FILES['file']['tmp_name'];
            $img_name = $_FILES['file']['name'];
            $img_des = "fotos/".$img_name;
            if (move_uploaded_file($img_loc, $img_des)) {
                $query= "INSERT INTO imagenes(imagen) VALUES('$img_name')";
                $result=mysqli_query($con, $query);
                echo '<script>
                        Swal.fire({
                        title: "cargada con exito ",
                        icon: "success",
                        confirmButtonText: "Aceptar",
                        confirmButtonColor: "#038dac",
                        allowOutsideClick: false
                        });
                    </script>';
                $resultado = mysqli_query($con, "SELECT id_img FROM imagenes ORDER BY id_img DESC LIMIT 1");
                $id_img = mysqli_fetch_assoc($resultado);
                
            } else {
                echo "Possible file upload attack!\n";
            }
        
        if($nombre!=null && $apellido!=null){
        $sql = "INSERT INTO personas(nombre, apellido, id_img)VALUES('$nombre','$apellido',$id_img)";
        mysqli_query($con,$sql);
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
	}
    ?>