<?php

class Login extends CI_Controller
{
	
	public function index()
	{
		$data['title'] = 'Login Page';

		$this->load->view('templates/header', $data);
		$this->load->view('login/index');
		$this->load->view('templates/footer');
	}
}