<?php
include "conexion.php";
$resultado = mysqli_query($con, "SELECT id_persona FROM personas ORDER BY id_persona DESC LIMIT 1");
$row = mysqli_fetch_assoc($resultado);
$id_per = $row['id_persona'];
if(isset($_POST['agregar'])){
    if (isset($_FILES['file'])) {
        $foto = $_FILES['file'];
        print_r($_FILES['file']);
        $img_loc = $_FILES['file']['tmp_name'];
        $img_name = $_FILES['file']['name'];
        $img_des = "fotos/".$img_name;
        $mover = move_uploaded_file($img_loc, $img_des);
        if($mover){
            $query= "INSERT INTO imagenes(imagen, id_persona) VALUES('$img_name', '$id_per')";
            $result=mysqli_query($con, $query);
            $_SESSION['mensaje'] = "Cargada con éxito";
            header("Location:..index.php");
            
        } else {
            echo "Possible file upload attack!\n";
        }
	}
}
?>