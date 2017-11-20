<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ver viajes</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/pasajero.css">
  </head>
  <body>
    <center>
            <table>
            <div class="operacion">
                <form>
                    <p>
                    <fieldset>
                        <legend>TURISMO INTER-PERÚ</legend>
                        <p><img src="<?=base_url();?>assets/imagenes/logo.png" width="150" height="130"><p>
                        <p>REGISTRO DE VIAJES</p>
                        <p>
                    </fieldset>
                </form>
            </div>
            </table>
            <table class="ver">
                <tr><th>RUTA<th>FOTO<th>VER
                <?php foreach ($datos as $d) { ?>
                  <tr>
                    <td><?=$d->nombreruta;?>
                    <td><img src="<?=base_url();?>assets/imagenes/<?=$d->nombreruta;?>.jpg" width="150" height="130"><p>
                    <td><input type="submit" value="--VER--"></a>
                <?php }?>
            </table>
        </center>
  </body>
</html>
