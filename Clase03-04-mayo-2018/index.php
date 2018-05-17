<?php
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Formulario para enviar datos a PHP</title>
  </head>
  <body>
    <div>
      Esto es una pagina para formulario de html con PHP
    </div>
    <form action="recibir.php?edad=23" method="POST" >
      Nombre: <input type="text" name="nombreformulario" id="idnombreformulario" >
      <br>
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
