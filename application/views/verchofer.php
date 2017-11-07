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
          <tr><td>Listado de Choferes
      </table>
      <table>
        <div class="operacion">
          <fieldset>
              <legend>OPERACIONES - INGRESO</legend>
              <p>INGRESO DE CHOFERES <a href="<?=base_url();?>Ctrl_chofer/regischofer">AÑADIR</a></p>
              <p>SALIDA DE CHOFERES <a href="<?=base_url();?>Ctrl_chofer/borrarchofer">ELIMINAR</a></p>
              <p>
          </fieldset>
        </div>
      </table>
      <table class="ver">
          <tr><th>CodigoID<th>Nombres<th>Apellidos<th>Sexo<th>Ruta<th>Fecha<th>Pago
          <?php foreach ($datos as $d) { ?>
            <tr>
              <td><?=$d->idchofer;?>
              <td><?=$d->nombres;?>
              <td><?=$d->apellidos;?>
              <td><?=$d->sexo;?>
              <td><?=$d->ruta;?>
              <td><?=$d->fecha;?>
              <td>S/.<?=$d->pago;?>
          <?php }?>
      </table>
    </center>
  </body>
</html>
