<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function inicios()
	{
		$this->load->view('inicios.php');
	}
	public function navegacion()
	{
		$this->load->view('navegacion.php');
	}
}
