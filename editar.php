<?php 
    $conexion=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"aemere");

    $id= $_GET["id"];
    $consulta="SELECT * FROM tienda WHERE id=$id";
    $respuesta=mysqli_query ($conexion, $consulta);
    $datos=mysqli_fetch_array ($respuesta);
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-eqiv="X-UA-Compatible" content="IE=edge">
        
        <title>editar</title>
    </head>
    <body>
        <?php
        $precio=$datos["precio"];
        $producto=$datos["producto"];
        $material=$datos["material"];
        $descripcion=$datos["descripcion"];
        $precio=$datos["precio"];
        ?>

        <h2>EDITAR</h2>
        <p>INGRESE LOS NUEVOS DATOS</p>
        <form action="" method="post" enctype="multipart/form-data">

            <label for="">imagen</label>
            <input type="file" name="imagen" placeholder="imagen">

            <label for="">producto</label>
            <input type="text" name="producto" placeholder="producto" value="<?php echo "$producto";?>">

            <label for="">material</label>
            <input type="text" name="material" placeholder="material" value="<?php echo "$material";?>">

            <label for="">descripcion</label>
            <input type="text" name="descripcion" placeholder="descripcion" value="<?php echo "$descripcion";?>">

            <label for="">precio</label>
            <input type="text" name="precio" placeholder="precio"  value="<?php echo "$precio";?>">

            <input type="submit" name="guardar" value="GUARDAR CAMBIOS">
            <button type="submit" name="cancelar" formaction="tienda.php">CANCELAR</button>
        </form>

        <?php 
        if (array_key_exists('guardar', $_POST)) {
            $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

            $producto=$_POST['producto'];
            $material=$_POST['material'];
            $descripcion=$_POST['descripcion'];
            $precio=$_POST['precio'];

            $consulta=" UPDATE tienda SET imagen='$imagen', producto='$producto', material= '$material', descripcion='$descripcion', precio='$precio' WHERE id=$id";
        
            mysqli_query($conexion,$consulta);
            header('location: administrador.php');

        } ?>
    
    
    </body>
    </html>