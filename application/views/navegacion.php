<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Pagina de Inicio</title>
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
		<link href="<?=base_url()?>assets/css/navegacion.css" rel ="stylesheet" type ="text/css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body bgcolor="#ED1A24">
		<center>
	  	<header>
	      <nav>
	        <ul>
	          <li><a href="<?=base_url()?>Ctrl_chofer/tabla" target="zona"><span class="dos"><i class="icon icon-envelop"></i>Informe - Choferes</a></li>
	          <li><a href="<?=base_url()?>Inicio/inicios" target="zona"><span class="uno"><i class="icon icon-home"></i>Inicio</a></li>
	          <li><a href="<?=base_url()?>Ctrl_viajes/verviajes" target="zona"><span class="cuatro"><i class="icon icon-mobile"></i>Servicio - Clientes</a></li>
	        </ul>
	      </nav>
	    </header>
    </center>
	</body>
</html>
