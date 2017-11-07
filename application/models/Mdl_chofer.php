<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_chofer extends CI_model {

	public function registrar($nombre,$apellido,$sexo,$destino,$fecha,$pago){
    $data = array(
        'nombres' => $nombre,
				'apellidos' => $apellido,
				'sexo' => $sexo,
        'ruta' => $destino,
        'fecha' => $fecha,
        'pago' => $pago,
        );
    $this->db->insert('chofer', $data);
  }

	public function verdatos(){

		$query=$this->db->query("SELECT * FROM chofer");
		return $query->result();

	}
	public function borrar($codigo){

		$this->db->delete('chofer', array('idchofer'=>$codigo));

	}


}
