<?php
 include "conexion.php";

 $descripcion=$_POST['descripcion'];
 $nombre=$_POST['nombre'];
 $correo=$_POST['correo'];
 $tabla="pedido";
$insertar = "INSERT INTO pedido (descripcion, nombre, correo) VALUES('$descripcion','$nombre','$correo')";
        	    

$resultado = mysqli_query($conectar,$insertar);  

if($resultado){
        echo'
        <script>
         alert("Su registro se realizo correctamente")
         location.href="catalogo.php";
        </script>
        ';
     }else{
        echo'
        <script>
         alert("No se guardaron los datos")
         location.href="catalogo.php";
        </script>
        ';
     }

?>