<?php
    // recibir informacion del formulario HTML (METODO POST)
    if($_POST){
    $nombre = $_POST['txtNombre'];   // El metodo post permite recepcionar informacion 
    echo "hola ".$nombre;
    } 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
  <form action="ejercicio2.php" method="post"> 
    Nombre:  
  <input type="text" name="txtNombre" id=""> 
  <br>
  <input type="submit" value="enviar">

  </form>
  

</body>
</html>