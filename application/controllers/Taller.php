<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taller extends CI_Controller {

	public function index()
	{
		$this->load->view('Taller/index_view');
	}
	public function primer_vista()
	{
		$this->load->view('primer_vista_view');
	}
    public function agregar_taller()
	{
		$this->load->view('agregar_taller_view');
	}
	
	public function taller2()
	{
		$this->load->view('taller2_view');
	}


}