<?php 
    $conexion=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"aemere");

    $id= $_GET["id"];
    $consulta="DELETE FROM tienda WHERE id=$id";

    mysqli_query($conexion,$consulta);
    header("location:administrador.php");


    ?>