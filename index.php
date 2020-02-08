<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php
 if(isset($_GET['nombre'])) {
    echo '¡Hola '.$_GET['nombre'].'!';
 } else {
    echo '¡Hola, persona de nombre desconocido!';
 };
 ?>
 </body>
</html>