<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilo6.css">
    <title>Catalogo</title>
</head>
<body>
    <?php
    include "header.php";
    ?>
    
    <div id="contenedorcatalogo">
    
        <div id="cat">
              <div ><img class="imagencatalogo" src="imagenes/catalogoletra.png" alt=""></div>
        </div>
        
        <div id="cat2">
        <?php
          include "conexion.php";
          $todos= "SELECT * FROM tablaimg";
          $resultado = mysqli_query($conectar, $todos);
          while ($row = mysqli_fetch_assoc($resultado)){
        ?>
              <div id="fldiv">
                <div id="imgancentro"><img class="formatoimagen" src= "administrador/<?php echo $row["imagen"]?>" alt=""></div>
                <div>         
                <p id="enorme"><?php echo $row["tipo"]; ?></p>
                <p><span id="grs">Medida: </span> <?php echo $row["medida"]; ?></p>
                <p><span id="grs">Color: </span> <?php echo $row["color"]; ?></p>
                <p><span id="grs">Precio: </span><?php echo $row["precio"]; ?></p>         
                </div>
              </div>
        <?php 
          }
          mysqli_free_result($resultado);
        ?> 
      </div> 
    </div>    

        <div class="pedido">
            <div class="especial"><img class="imagenespecial" src="imagenes/diseniometal1.jpg" alt=""></div>
            <div class="especial"><t1>¿Un pedido especial?</t1><p>Escribenos</p>
                        <form  action="raw_enviar_mailer.php" method="post">
                        <input class="textinput" type="text" value="Cuentanos sobre tu pedido"  name="descripcion">
                        <input class="textinput" type="text" value="Tu Nombre" name="nombre" require>
                        <input class="textinput" type="text" value="Tu email" name="correo" require><br>
                        <p>Nos pondremos encontacto contigo.</p>
                        <input class="btninput"  type="submit"value="Enviar">
                        </form>
        </div>
        </div>

    <?php
    include "footer.php";
    ?>

</body>
</html>