<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_viajes extends CI_Controller {

	public function __construct()
  {
  	parent::__construct();
		$this->load->model('Mdl_viajes');
  }

	public function regischofer()
	{
		$this->load->view('regischofer');
	}
	public function borrarchofer()
	{
		$this->load->view('borrarchofer');
	}
	public function registrar()
	{
		$nombre=$this->input->post('nombre');
		$apellido=$this->input->post('apellido');
		$sexo=$this->input->post('sexo');
		$destino=$this->input->post('destino');
		$fecha=$this->input->post('fecha');
		$pago=$this->input->post('pago');
		$this->Mdl_chofer->registrar($nombre,$apellido,$sexo,$destino,$fecha,$pago);
		$this->tabla();
	}
	public function borrar()
	{
		$codigo=$this->input->post('codigo');
		$this->Mdl_chofer->borrar($codigo);
		$this->tabla();
	}
	public function index(){
		//$data["datos"]=$this->Mdl_chofer->verdatos();
		$this->load->view('verviajes',$data);
	}
	public function verviajes(){
		$data["datos"]=$this->Mdl_viajes->verdatos();
		$this->load->view('verviajes',$data);
	}

}
