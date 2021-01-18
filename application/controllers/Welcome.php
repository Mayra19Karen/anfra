<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navbar');
		$this->load->view('home');
		$this->load->view('includes/footer');
	

	}
	public function hola()
	{
		echo base_url();
	}
}
