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
	public function about()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navbar');
		$this->load->view('about');
		$this->load->view('includes/volver');
		$this->load->view('includes/footer');
	

	}
	public function calidad()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navbar');
		$this->load->view('calidad');
		$this->load->view('includes/volver');
		$this->load->view('includes/footer');
	}

	public function clientes()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navbar');
		$this->load->view('clients');
		$this->load->view('includes/volver');
		$this->load->view('includes/footer');
	}
	public function contact()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navbar');
		$this->load->view('contact');
		$this->load->view('includes/volver');
		$this->load->view('includes/footer');
	}
	public function services()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/navbar');
		$this->load->view('works');
		$this->load->view('includes/volver');
		$this->load->view('includes/footer');
	}
}
