<?php 
    $conexion=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"aemere");

    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $producto=$_POST['producto'];
    $material=$_POST['material'];
    $descripcion=$_POST['descripcion'];
    $precio=$_POST['precio'];

    $consulta= "INSERT INTO tienda (id,imagen,producto,material,descripcion,precio) VALUES ('','$imagen','$producto','$material','$descripcion','$precio')";

mysqli_query($conexion,$consulta);
header('location: administrador.php');



    ?>
    