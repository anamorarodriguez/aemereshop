<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> base de datos</h3>
    <h3>TIENDA</h3>
    <br>
    <a href="adminceramica.php">CERAMICA</a>
    <br>
    <a href="admincristal.php">CRISTAL</a>
    <br>
    <a href="adminporcelana.php">PORCELANA</a>
    <br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>IMAGEN</th>
            <th>PRODUCTO</th>
            <th>MATERIAL</th>
            <th>DESCRIPCION</th>
            <th>PRECIO</th>
            <th>BORRAR</th>
            <th>EDITAR</th>

        </tr>

    <?php 
    $conexion=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"aemere");
    $consulta="SELECT*FROM tienda";
    $datos=mysqli_query($conexion,$consulta);

    while ($registro=mysqli_fetch_array($datos)) { ?>
        <tr> 
            <td><?php echo $registro["id"];?></td>
            <td><img src="data:image/jpg;base64,<?php echo base64_encode($registro["imagen"]);?>" width="100px" height="100px"></td>
            <td><?php echo $registro["producto"];?></td>
            <td><?php echo $registro["material"];?></td>
            <td><?php echo $registro["descripcion"];?></td>
            <td><?php echo $registro["precio"];?></td>

            <td><a href="borrar.php? id=<?php echo $registro["id"];?>">BORRAR</a></td>
            <td><a href="editar.php? id=<?php echo $registro["id"];?>">EDITAR</a></td>


        </tr>
        <?php } ?>
    
    </table>

</body>
</html>