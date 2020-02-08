<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php
 if(isset($_GET['name'])) {
    echo '¡Hola '.$_GET['name'].'!';
 } else {
    echo '¡Hola, persona de nombre desconocido!';
 };
 ?>
 </body>
</html>