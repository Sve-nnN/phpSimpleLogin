<?php
include 'conexion.php';
session_start();
    
    
$id = $_POST['id'];
$clave =$_POST['clave'];   
  
$insertar = "UPDATE usuarios SET clave = '$clave' WHERE id = '$id'";
        
$resultado = $mysqli->query($insertar);


?>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>  
    </head>
    <body>
        <div class="container">
           <div class="row">
            <div class="row" style="text-align:center">
                <?php if($resultado){ ?>
                <h3>CLAVE MODIFICADA</h3>
                <?php } else { ?>
                <h3>ERROR AL MODIFICAR</h3>
                <?php } ?>   
                <br> 
            <a href="salir.php" class="btn btn-default2"> Regresar</a>
            </div>
         
         </div>
        </div>   
    </body>
</html>
       




