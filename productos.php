<?php 
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"aemere");

$id = $_GET ['id'];
$consulta = "SELECT * FROM tienda WHERE id = $id ";
$respuesta = mysqli_query($conexion,$consulta);
$datos=mysqli_fetch_array($respuesta);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEMERE</title>

    <link rel="stylesheet" href="css/productos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"></head>
<body>
<div class="wrapper">
    <aside>
        <header>
            <h1 class="logo">AMR</h1>
        </header>
        <nav>       
            <div class="filtro"> 
                <button class="botonfiltro" id="inicio"><a href="aemere.php">INICIO</a></button>
            </div>
        </nav>
        <ul>
            <li><a class="boton_carrito" href="carrito.html"><i class="bi bi-cart"></i>CARRITO <span class="cantidad_carrito">0</span></a></li>
        </ul>
    </aside>

    <main>
    <?php 
                $imagen=$datos["imagen"];
                $producto=$datos["producto"];
                $material=$datos["material"];
                $descripcion=$datos["descripcion"];
                $precio=$datos["precio"];
                $pago=$datos["pago"];
                ?>

        <!-- <h2 class="titulo">-aemere tazas</h2> -->
        <div class="contenedor_productos">
                    <div class="card" style="width: 80%;">
                            <div class="img-card-center"><img class="card-img-top" src="data:image/jpg;base64,<?php echo base64_encode($datos['imagen']) ?>" width="300px" height="300px"></div>
                            <div href="productos.php?id=<?php echo $datos['id'];?>" class="card-body">
                                <h5 class="card-title"><?php echo ucwords($datos['producto']) ?></h5>
                                <p class="card-text"><?php echo $datos ['descripcion']; ?></p>
                                <div class="seccionpago">
                                    <span class=precio><b>$ <?php echo $datos ['precio']; ?></b></span>
                                    <a href="<?php echo $datos['pago']; ?>" target="_Blank"><button class="botoncompra"><b>COMPRAR</b></button></a>
                                    <button class=carritosimbolo><span><i class="bi bi-cart" id=carritoboost></i></span></button>
                                </div>
                            </div>
                        </a>        
                    </div>
               
        </div>  
             
    </main>
</div>
<footer class="texto_footer">©AEMERE2023</footer> 





</body>
</html>
