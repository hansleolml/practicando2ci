<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ver viajes</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>plantilla/css/virtual.css">
  </head>
  <body>
    <center>
            <table>
            <div class="operacion">
                <form>
                    <p>
                    <fieldset>
                        <legend>TURISMO INTER-PERÚ</legend>
                        <p><img src="<?=base_url();?>plantilla/imagen/logo.png" width="150" height="130"><p>
                        <p>REGISTRO DE VIAJES</p>
                        <p>
                    </fieldset>
                </form>
            </div>
            </table>
            <table class="cuerpo">
                <tr><th>RUTA<th>FOTO<th>VER
                    <?php
                    $sql="select rutcod, rutnom from ruta";
                    $res=  mysqli_query($cn,$sql)  or die('Error:'.mysqli_error());
                    while($f=  mysqli_fetch_array($res)){  //lee fila pór fila
                    // $im=base_url()+"plantilla/turismo/$f[1].jpg";
                    ?>
                    <tr><td><?=$f[1]?>
                        <td align="center"><img src="<?=base_url();?>plantilla/turismo/<?=$f[1]?>.jpg" height="200" width="350">
                        <td class="unos"><a href="<?=base_url();?>Inicio/controlar/<?=$f[0]?>/<?=$f[1]?>">
                            <input type="submit" value="--VER--"></a>
                    <?php
                        }
                    ?>
            </table>
        </center>
  </body>
</html>
