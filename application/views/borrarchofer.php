<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/pasajero.css">
    <title>Ver choferes</title>
  </head>
  <body>
    <center>
      <table class="pasaje">
          <tr><th>TRABAJADORES DE INTER - PERÚ
          <tr><td>Eliminacion de choferes
      </table>
      <div class="registro">
          <form action="<?=base_url();?>Ctrl_chofer/borrar" method= "POST">
              <fieldset>
                  <legend>Borrar Chofer</legend>
                  <table>
                      <tr><td class="celda">Ingrese Codigo de Chofer:
                        <td colspan="2"><input type="text" class ="pass" name ="codigo" placeholder="Codigo" required>
                      <tr><td colspan="2" class="boton"><input type="submit" value="Enviar">
                          <input type="reset" value="Restablecer">
                  </table>
              </fieldset>
          </form>
      </div>
  </center>
  </body>
</html>
