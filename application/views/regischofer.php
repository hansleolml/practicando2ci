<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de Choferes</title>
    <link rel="stylesheet" type="text/css" href="css/nuevo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <center>
      <table class="pasaje">
          <tr><th>TRABAJADORES DE INTER - PERÚ
          <tr><td>Registro de Choferes
      </table>
      <div class="registro">
        <form action="<?=base_url();?>Ctrl_chofer/registrar" method= "POST">
          <fieldset>
            <legend>Ingreso de Choferes</legend>
            <table>
              <tr><td class="celda">Nombres de Chofer: <td colspan="2">
                <input title="nombre de usuario" type="text" class ="pass" name ="nombre" placeholder="Nombres" required>
              <tr><td class="celda">Apellidos de Chofer: <td colspan="2">
                <input title="nombre de usuario" type="text" class ="pass" name ="apellido" placeholder="Apellidos" required>
              <tr><td class="celda">Sexo: <td colspan="2">
                <input type="radio" class ="pass" name ="sexo" placeholder="Genero" value="Hombre" required>Hombre
                <input type="radio" class ="pass" name ="sexo" placeholder="Genero" value="Mujer" required>Mujer
              <tr><td class="celda">Ruta: <td colspan="2">
                      <select name="destino" required>
                          <option value="">Seleccionar ruta</option>
                          <option value="Arequipa">Arequipa</option>
                          <option value="Ayacucho">Ayacucho</option>
                          <option value="Chiclayo">Chiclayo</option>
                          <option value="Cuzco">Cuzco</option>
                          <option value="Huncavelica">Huncavelica</option>
                          <option value="Huanuco">Huanuco</option>
                          <option value="Huaraz">Huaraz</option>
                          <option value="Ica">Ica</option>
                          <option value="Tacna">Tacna</option>
                          <option value="Trujillo">Trujillo</option>
                      </select>
              <tr><td class="celda">Fecha de Ingreso: <td colspan="2"><input title="pago" type="date" class ="pass" name ="fecha" required>
              <tr><td class="celda">Pago a chofer: <td colspan="2">S/.<input size="14" title="pago" type="text" class ="pass" name ="pago" placeholder="Pago Mensual" required>
              <tr><td colspan="2" class="boton"><input type="submit" value="Enviar">
              <input type="reset" value="Restablecer">
            </table>
          </fieldset>
        </form>
      </div>
    </center>
  </body>
</html>
